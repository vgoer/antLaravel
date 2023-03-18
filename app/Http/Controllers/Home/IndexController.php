<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // app 内容
    public $app = [
        'domain'       =>   'www.aaa.com',
        'appname'     =>   'my web',
        'description'  =>   '描述',
        'keywords'     =>   'keywords'
    ];

    // 首页路由
    public function index()
    {

        return view('/www/index',['app'=> $this->app]);
    }

    // about 
    public function about()
    {

        return view('/www/about',['app'=>$this->app]);
    }

    // content
    public function content()
    {

        return view('/www/content',['app'=>$this->app]);
    }

}
