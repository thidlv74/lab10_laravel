<?php

namespace App\Http\Controllers;

// use DB;
use Session;
use App\Http\Requests;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

session_start();


class HomeController extends Controller
{
    public function index()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','1')->orderby('brand_id','desc')->get();
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product);
    }
}
