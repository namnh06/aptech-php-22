<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    function hienThiTatCaBaiViet()
    {
        $posts = DB::table('posts')->get();

        return view('posts', [
            'posts' => $posts
        ]);
    }
}