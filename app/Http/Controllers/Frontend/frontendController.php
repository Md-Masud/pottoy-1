<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        $bannerproducts=Campaign::where('status',1)->whereDate('end_date','>=','start_date')->get();
        $featureds=Product::where('status',1)->where('featured',1)->orderBy('id','DESC')->limit(9)->get();
        $latest_products=Product::where('status',1)->orderBy('id','DESC')->limit(9)->get();
        $categories=Category::orderBy('id','DESC')->get();
        $sub_categories=SubCategory::orderBy('id','DESC')->get();
        $popular_products=Product::where('status',1)->orderBy('product_view','DESC')->limit(9)->get();
        return view('frontend.dashboard',compact('bannerproducts','featureds','latest_products','categories','sub_categories','popular_products'));
    }

    public function product_details($slug){
        Product::where('slug',$slug)->increment('product_view');
        return view('frontend.product_details.product_details');
    }

    public function userLogin(){
        return view('frontend.partials.login');
    }

    public function userRegister(){
        return view('frontend.partials.register');
    }

}
