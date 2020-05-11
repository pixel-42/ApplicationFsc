<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = ['Egor','Matvey','Katy'];

        $title = "Список пользователей !!!";

        return view('dur', compact('title', 'users'));
    }
}
