<?php

namespace App\Http\Controllers;

use App\Category;
use App\Products;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** @var TYPE_NAME $products */
       //$products = Products::inRandomOrder()->take(12)->get();
        $categories = Category::all();

        if (request()->categories)
        {
            $products = Products::with('categories')->whereHas('categories', function ($query) {
                $query->wherehas('categories_id', request()->parent_id);
            });
            $categoryName = optional($categories->where('slug', request()->categories)->first())->name;
        } else {
            $products = Products::all();

        }


        return view('frontEnd.shop')->with([
            'products'=> $products,
            'categories'=>$categories,
    ]);
    }

    public function byCategory($id)
    {
        /** @var TYPE_NAME $products */
       // $products = Products::all();
        $category = Category::all();

        $products = Products::where('category_id','$id');

        return view('frontEnd.product_cat')->with([
            'products'=> $products,
            'categories'=>$category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @param string $slug
     @return \Illuminate\Http\Response
     */

    public function show($slug)
    {
    $product = Products::where('slug',$slug)->firstOrFail();

    return view('frontEnd.product')->with('product',$product);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        // $products = Product::where('name', 'like', "%$query%")
        //                    ->orWhere('details', 'like', "%$query%")
        //                    ->orWhere('description', 'like', "%$query%")
        //                    ->paginate(10);

        $products = Products::search($query)->paginate(10);

        return view('search-results')->with('products', $products);
    }

    public function searchAlgolia(Request $request)
    {
        return view('search-results-algolia');
    }


}
