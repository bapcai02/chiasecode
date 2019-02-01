<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SLide;
use App\Product;
use App\ProductType;

class PageController extends Controller
{
	function __construct()
	{
		$loai_sp= DB::table('type_products')->get();
		view()->share('loai_sp ',$loai_sp);
	}
    public function getindex()
    {
    	$slide       = Slide::all();
    	$new_product = Product::where('new',1)->paginate(8);
    	$sanphamkh   = Product::where('promotion_price','<>',0)->paginate(6);
    	return view('page.trangchu',compact('slide','new_product','sanphamkh'));
    }
    public function getloaisp()
    {
    	return view('page.loaisp');
    }
    public function getchitietsp()
    {
    	return view('page.chitietsp');
    }
    public function getlienhe()
    {
    	return view('page.lienhe');
    }
    public function getgioithieu()
    {
    	return view('page.gioithieu');
    }
}
