<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // 登录 
    public function login(Request $request)
    {

        $param = $request->all();

        res_json(1,'yes',$param['username']);

        $userModel = new User();
        $userModel->name      = $param['username'];
        $userModel->email     = $param['email'];
        $userModel->password  = $param['password'];

        $res = $userModel->save();
        if($res){
            res_json(1,'登录成功',['name'=>$userModel->name]);
        }
        res_json();
    }



    // z注册
    public function reg(Request $request)
    {

        $params = $request->all();


        dd($params);


    }
}


