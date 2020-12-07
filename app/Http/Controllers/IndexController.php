<?php

namespace App\Http\Controllers;

use App\Category;
use App\ImageGallery_model;
use App\ProductAtt_model;
use App\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $products=Products::all();
        return view('frontEnd.index',compact('products'));
    }

    public function shop(){
        $products=Products::all();
        $byCate="";
        return view('frontEnd.products',compact('products','byCate'));
    }

    public function listByCat($id){
        $list_product=Products::where('categories_id',$id)->get();
        $byCate=Category::select('name')->where('id',$id)->first();

        return view('frontEnd.products',compact('list_product','byCate'));
    }

    public function prodetail($id){
        $detail_product=Products::findOrFail($id);
        $imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        $totalStock=ProductAtt_model::where('products_id',$id)->sum('stock');
        $relateProducts=Products::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        return view('frontEnd.product_details',compact('detail_product','imagesGalleries','totalStock','relateProducts'));
    }

    public function getAttrs(Request $request){
        $all_attrs=$request->all();
        $attr=explode('-',$all_attrs['size']);
        $result_select=ProductAtt_model::where(['products_id'=>$attr[0],'size'=>$attr[1]])->first();
        echo $result_select->price;
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

}
