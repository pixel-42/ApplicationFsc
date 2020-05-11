<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        $title = "Список пользователей !!!";
        $users = User::all();
        return view('dur', compact('title', 'users'));
    }

    public function add()
    {
        return view('auth/register');
    }
    public function logout()
    {
        return Auth::logout();
    }

    public function save(Request $request)
    {
        User::create([
            'name' =>  $request->login,
            'email' =>  $request->login,
            'password' => Hash::make($request->password)
        ]);

//        return redirect('getUser');
        return view('auth/login');
    }
}
