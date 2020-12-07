<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Category;
use App\Products;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** @var TYPE_NAME $products */
      /*  $products = Products::inRandomOrder()->take(6)->get();
        $categories = Category::all();

        return view('frontEnd.landing_page')->with([
            'products'=> $products,
            'categories'=>$categories,
        ]);*/
        $Products = DB::table('categories')->rightJoin('products', 'products.categories_id', '=', 'categories.id')->get(); // now we are fetching all products

        // now we are fetching all products and categories
        $Products=Products::all();
        return view('frontEnd.landing_page',compact('Products'));

    }

    public function contact()
    {

        return view('frontEnd.contact');
    }

    public function faq()
    {

        return view('frontEnd.faq');
    }

    public function about()
    {

        return view('frontEnd.about');
    }

    public function terms()
    {

        return view('frontEnd.terms');
    }

    public function privacy()
    {

        return view('frontEnd.privacy');
    }

    public function cart()
    {

        return view('frontEnd.cart');
    }

    public function refund()
    {

        return view('frontEnd.refund');
    }

    public function cookies()
    {

        return view('frontEnd.cookies');
    }

public function show($slug)
{
        $product = Products::where('slug', $slug)->firstOrFail();

        return view('product',$product);
}
}
