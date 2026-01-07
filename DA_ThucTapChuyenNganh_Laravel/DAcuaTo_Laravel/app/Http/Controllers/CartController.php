<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Video;
use App\Models\Product;
use App\Models\Category;

class CartController extends Controller
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

    public function index()
    {
        $cartModel = $this->getCart();

        // support old-style query links like ?add=ID or ?remove=ID (treat as product)
        if (request()->query('add')) {
            $this->add(request()->merge(['product_type' => 'product', 'product_id' => (int) request()->query('add')]));
            return back();
        }
        if (request()->query('remove')) {
            $this->remove(request(), (int) request()->query('remove'));
            return back();
        }

        $items = $cartModel->items()->get();
        $cart = collect();
        $subtotal = 0;
        foreach ($items as $it) {
            $product = null;
            if ($it->product_type === 'video') {
                $product = Video::find($it->product_id);
            } elseif ($it->product_type === 'product') {
                $product = Product::find($it->product_id);
            } elseif ($it->product_type === 'category') {
                $product = Category::find($it->product_id);
            }
            $entry = (object) [
                'id' => $it->id,
                'title' => $product->title ?? $product->name ?? null,
                'image' => $product->image ?? null,
                'description' => $product->description ?? $product->content ?? null,
                'quantity' => $it->quantity,
                'price' => $it->price ?? 0,
            ];
            $subtotal += ($entry->price * $entry->quantity);
            $cart->push($entry);
        }

        $shipping = 0;
        return view('cart', compact('cart','subtotal','shipping'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_type' => 'required|string',
            'product_id' => 'required|integer',
            'quantity' => 'nullable|integer|min:1'
        ]);

        $cart = $this->getCart();
        $qty = max(1, (int) $request->quantity);

        $item = CartItem::where('cart_id', $cart->id)
            ->where('product_type', $request->product_type)
            ->where('product_id', $request->product_id)
            ->first();

        $price = null;
        if ($request->product_type === 'video') {
            $video = Video::find($request->product_id);
            $price = $video->price ?? 0;
        } elseif ($request->product_type === 'product') {
            $p = Product::find($request->product_id);
            $price = $p->price ?? 0;
        } elseif ($request->product_type === 'category') {
            $c = Category::find($request->product_id);
            // categories may represent bundles; default to 0 if not set
            $price = $c->price ?? 0;
        }

        if ($item) {
            $item->quantity += $qty;
            $item->price = $price;
            $item->save();
        } else {
            CartItem::create([
                'cart_id' => $cart->id,
                'product_type' => $request->product_type,
                'product_id' => $request->product_id,
                'quantity' => $qty,
                'price' => $price,
            ]);
        }

        return back()->with('status', 'Added to cart');
    }

    public function remove(Request $request, $id)
    {
        $cart = $this->getCart();
        $item = CartItem::where('cart_id', $cart->id)->where('id', $id)->first();
        if ($item) $item->delete();
        return back();
    }
}
