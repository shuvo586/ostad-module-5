<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;
use App\Models\Collection;
use Illuminate\Support\Facades\URL;

class CollectionController extends Controller {
    public function collectionIndex(): View
    {
        $collections = Collection::where('shop_id', auth()->user()->id)->get();
        return view('collection.index', compact('collections'));
    }

    public function collectionSave(Request $request): RedirectResponse
    {
        $collection_id = $request->collection_id;
        if ($collection_id != 0) {
            $collection = Collection::find($collection_id);
        } else {
            $collection = new Collection();
        }

        $collection->name = $request->name;
        $collection->description = $request->description;
        $collection->shop_id = auth()->user()->id;

        $collection->save();

        return Redirect::away(URL::shopifyRoute('collection.index'));
    }
}
