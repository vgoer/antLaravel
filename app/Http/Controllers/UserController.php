<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // 登录路由
    public  function login(Request $request)
    {
        $param = $request->all();

        res_json(1,'yes',$param);
    }
}
