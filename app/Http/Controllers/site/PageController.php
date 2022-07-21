<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\ProductImages;
use App\Models\Products;
use App\Models\ProductSpecification;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index(){

        $newProducts = Products::where('status',1)->orderBy('created_at','DESC')->take(3)->get();
        return view('index', compact('newProducts'));
    }

    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function gallery(){
        return view('gallery');
    }

    public function catalog(){
        return view('catalog');
    }

    public function login(){
        return view('login');
    }
    public function signup(){
        return view('signup');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function faq(){
        return view('faq');
    }

    public function singleProduct($slug){

        $product = Products::where('slug', $slug)->first();
        $get_product_specification = ProductSpecification::where('product_id', $product->id)->first();
        $product_images = ProductImages::where('product_id', $product->id)->get();
       
        if($product == null){
            return abort(404);
        }
        return view('single-product', compact('product','get_product_specification','product_images'));
    }
}
