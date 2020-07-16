<?php

namespace App\Http\Controllers\Bn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
	//参数注入 依赖注入 tp和它的写法一样
	//数据类型 参数：目的->让参数绝对化
    public function index(Request $request){
    // var_dump($request);
    }
}
