<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
//    Blog List Controller
   public function blogList(){
       return view('admin.blog.blogList');
   }

//   Add Form Blog
    public function addBlog()
    {
        return view('admin.blog.addBlog');
    }
}
