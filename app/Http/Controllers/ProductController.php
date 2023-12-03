<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Collection;
use App\Models\Product;


class ProductController extends Controller
{

    function products(Request $request, $collection_id)
    {
        $collection = Collection::findOrFail($collection_id);
        $shop = $request->user();
        if ($collection->shop_id != $request->user()->id) {
            return Redirect::tokenRedirect('collection.index');
        }

        if ($request->isMethod('post')) {
            $productid = $request->productid;
            if ($productid != 0) {
                $product = product::find($productid);
            } else {
                $product = new product();
            }

            $product->name = $request->name;
            $product->description = $request->description;
            $product->collection_id = $collection->id;
            $product->shop_id = $shop->id;

            $product->save();

            $redirectUrl = getRedirectRoute('collection.products', ['collection_id' => $collection->id]);
            return redirect($redirectUrl);

        }

        $products = Product::where('collection_id', $collection->id)->get();
        return view('collection.products', compact('products', 'collection'));
    }
}
