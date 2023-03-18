<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    // 登录
    public function login(Request $request)
    {
        $param = $request->all();

        res_json(1,'yes',$param);

    }
}
