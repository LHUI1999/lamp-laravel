<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class IndexController extends Controller
{
    //前台首页
    public function index()
    {
    	$cates = DB::table('cates')->where('path','0')->get();
    	// $data = [];
    	// foreach($cates as $k => $v){
    	// 	// echo '0,'.$k;
    	// 	if($v->path == '0'){
    	// 		$data[$v->cname] = $v->cname;
    	// 		// $data[$k]['path'] = $v->path;
    	// 		// $data[$k][]=[1,2,3];
    	// 	}
    		

    	// }
    	
    	// dd($data);


    	

    	
    	return view('home.index.index');
    }


}
