<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }

    function show($id)
    {
        $user = User::where('id', $id)->first(); // User -> users
        return view('users.show', [
            'user' => $user
        ]);
    }

    function create()
    {
        return view('users.create');
    }

    function store()
    {
        $ten = $_POST['ten'];
        $thuDienTu = $_POST['thuDienTu'];
        User::create([
            'name' => $ten,
            'email' => $thuDienTu
        ]);
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }
}