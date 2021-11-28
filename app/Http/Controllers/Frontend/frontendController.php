<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Product;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        $bannerproducts=Campaign::all();

        $featureds=Product::where('status',1)->where('featured',1)->orderBy('id','DESC')->limit(9)->get();

        return view('frontend.dashboard',compact('bannerproducts','featureds'));
    }
}
