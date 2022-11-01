<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin/index');
    }

    public function login()
    {
        return view('Admin/login');
    }

    public function loginData(loginRequest $request)
    {
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            return redirect(route('admin.index'));
        }
        Alert::error('Error','Data Invalid !');
        return redirect()->back();
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('admin.login'));
    }

}
