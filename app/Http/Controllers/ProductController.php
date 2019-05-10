<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests;
use DB;
use App\Models\ProductRating;
use Session;

class ProductController extends Controller{
	


	function submitRating(Request $request){

$productRating_model = new ProductRating();
$pid = $request->product_id;
$productRating_model->user_id=0;
$productRating_model->product_id = $request->product_id;
$productRating_model->rating =$request->rating;
$productRating_model->reviews =$request->comment;
$productRating_model->save;
session::flash('success-message','Thanks For Your Review');
return Redirect::to('/product/details/'.$pid);

}
}
