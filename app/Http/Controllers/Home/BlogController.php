<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public $blogs = [
        'blogs'     =>    'aaaa',
    ];

    public function create()
    {

        return view('www/blogs/create',['blogs'=>$this->blogs]);
    }



    public function store(Request $request)
    {
        $param = $request->all();
        $blogModel = new Blog();

        $blogModel->title = $param['title'];
        $blogModel->content = $param['content'];

        $blogModel->save();
        return redirect('/blogs/create');
    }

}
