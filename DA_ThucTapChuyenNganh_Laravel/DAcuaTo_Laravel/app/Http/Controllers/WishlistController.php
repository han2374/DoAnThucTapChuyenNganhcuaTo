<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Models\WishlistItem;
use App\Models\Video;
use App\Models\Product;
use App\Models\Category;

class WishlistController extends Controller
{
    protected function getWishlist()
    {
        if (auth()->check()) {
            $w = Wishlist::firstOrCreate(['user_id' => auth()->id()]);
        } else {
            $sessionId = session()->getId();
            $w = Wishlist::firstOrCreate(['session_id' => $sessionId]);
        }
        return $w;
    }

    public function index()
    {
        $w = $this->getWishlist();

        // support query add/remove like ?add=ID or ?remove=ID (treat as product)
        if (request()->query('add')) {
            $this->add(request()->merge(['product_type' => 'product', 'product_id' => (int) request()->query('add')]));
            return back();
        }
        if (request()->query('remove')) {
            $this->remove(request(), (int) request()->query('remove'));
            return back();
        }

        $items = [];
        foreach ($w->items()->get() as $it) {
            if ($it->product_type === 'video') {
                $v = Video::find($it->product_id);
                if ($v) $items[] = $v;
            } elseif ($it->product_type === 'product') {
                $p = Product::find($it->product_id);
                if ($p) $items[] = $p;
            } elseif ($it->product_type === 'category') {
                $c = Category::find($it->product_id);
                if ($c) $items[] = $c;
            }
        }

        return view('wishlist', compact('items'));
    }

    public function add(Request $request)
    {
        $request->validate([
            'product_type' => 'required|string',
            'product_id' => 'required|integer',
        ]);

        $w = $this->getWishlist();
        $exists = WishlistItem::where('wishlist_id',$w->id)
            ->where('product_type',$request->product_type)
            ->where('product_id',$request->product_id)
            ->exists();
        if (!$exists) {
            WishlistItem::create([
                'wishlist_id'=>$w->id,
                'product_type'=>$request->product_type,
                'product_id'=>$request->product_id,
            ]);
        }
        return back()->with('status','Added to wishlist');
    }

    public function remove(Request $request, $id)
    {
        $w = $this->getWishlist();
        $item = WishlistItem::where('wishlist_id',$w->id)->where('id',$id)->first();
        if ($item) $item->delete();
        return back();
    }
}
