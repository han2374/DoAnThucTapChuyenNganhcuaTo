<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Video;
use App\Models\Product;
use App\Models\Category;

class OrderController extends Controller
{
    protected function getCart()
    {
        if (auth()->check()) {
            $cart = Cart::firstOrCreate(['user_id' => auth()->id()]);
        } else {
            $sessionId = session()->getId();
            $cart = Cart::firstOrCreate(['session_id' => $sessionId]);
        }
        return $cart;
    }

    public function checkout()
    {
        $cart = $this->getCart();
        $items = $cart->items()->get();
        // resolve product details for checkout view
        $resolved = collect();
        foreach ($items as $it) {
            $product = null;
            if ($it->product_type === 'video') {
                $product = Video::find($it->product_id);
            } elseif ($it->product_type === 'product') {
                $product = Product::find($it->product_id);
            } elseif ($it->product_type === 'category') {
                $product = Category::find($it->product_id);
            }
            $resolved->push((object)[
                'item' => $it,
                'product' => $product,
            ]);
        }
        return view('checkout', compact('cart','resolved','items'));
    }

    public function place(Request $request)
    {
        $cart = $this->getCart();
        $items = $cart->items()->get();
        if ($items->isEmpty()) return back()->with('error','Cart empty');

        $total = $items->reduce(function($carry, $i){ return $carry + (($i->price ?? 0) * $i->quantity); }, 0);

        $payment = $request->input('payment_method','cash');

        $meta = $request->only(['name','email','address']);
        $meta['payment_method'] = $payment;

        $order = Order::create([
            'user_id' => auth()->id() ?? null,
            'total' => $total,
            'status' => 'pending',
            'meta' => json_encode($meta)
        ]);

        foreach($items as $it){
            OrderItem::create([
                'order_id' => $order->id,
                'product_type' => $it->product_type,
                'product_id' => $it->product_id,
                'quantity' => $it->quantity,
                'price' => $it->price,
            ]);
        }

        // clear cart
        foreach($items as $it) $it->delete();

        // Handle payment methods
        if ($payment === 'cash') {
            return redirect()->route('orders')->with('status','Order placed (Cash on delivery)');
        }

        if ($payment === 'momo') {
            return redirect()->route('checkout.momo', ['order_id' => $order->id]);
        }

        if ($payment === 'vnpay') {
            return redirect()->route('checkout.vnpay', ['order_id' => $order->id]);
        }

        return redirect()->route('orders')->with('status','Order placed');
    }

    // Simulated Momo initiation (demo)
    public function momo(Request $request)
    {
        $orderId = $request->order_id;
        $order = Order::find($orderId);
        if (!$order) {
            return redirect()->route('orders')->with('error', 'Order not found');
        }

        // Generate a simple transfer code for customer to include in their Momo transfer
        try {
            $code = 'MM' . strtoupper(substr(bin2hex(random_bytes(4)), 0, 8));
        } catch (\Exception $e) {
            $code = 'MM' . strtoupper(substr(sha1($order->id . time()), 0, 8));
        }

        $meta = json_decode($order->meta, true) ?: [];
        $meta['momo_code'] = $code;
        $meta['payment_method'] = 'momo';
        $order->update(['meta' => json_encode($meta)]);

        // Merchant phone (use config if set)
        $merchant_phone = config('services.momo.phone') ?? '0123456789';

        return view('payment_momo', compact('order', 'code', 'merchant_phone'));
    }

    public function momoReturn(Request $request)
    {
        $order = Order::find($request->order_id);
        if ($order) {
            $meta = json_decode($order->meta, true) ?: [];
            $meta['payment_method'] = 'momo';
            $order->update(['status' => 'paid', 'meta' => json_encode($meta)]);
        }
        return redirect()->route('orders')->with('status','Payment successful (Momo)');
    }

    // Simulated VNPAY initiation (demo)
    public function vnpay(Request $request)
    {
        $orderId = $request->order_id;
        $order = Order::find($orderId);
        if (!$order) {
            return redirect()->route('orders')->with('error', 'Order not found');
        }

        // Generate a simple VNPAY code or pretend URL for demo purposes
        try {
            $code = 'VN' . strtoupper(substr(bin2hex(random_bytes(4)), 0, 8));
        } catch (\Exception $e) {
            $code = 'VN' . strtoupper(substr(sha1($order->id . time()), 0, 8));
        }

        $meta = json_decode($order->meta, true) ?: [];
        $meta['vnpay_code'] = $code;
        $meta['payment_method'] = 'vnpay';
        $order->update(['meta' => json_encode($meta)]);

        $merchant_phone = config('services.vnpay.phone') ?? '0123456789';

        return view('payment_vnpay', compact('order', 'code', 'merchant_phone'));
    }

    public function vnpayReturn(Request $request)
    {
        $order = Order::find($request->order_id);
        if ($order) {
            $meta = json_decode($order->meta, true) ?: [];
            $meta['payment_method'] = 'vnpay';
            $order->update(['status' => 'paid', 'meta' => json_encode($meta)]);
        }
        return redirect()->route('orders')->with('status','Payment successful (VNPAY)');
    }

    public function index()
    {
        $orders = auth()->check() ? Order::where('user_id', auth()->id())->get() : collect();
        return view('orders', compact('orders'));
    }
}
