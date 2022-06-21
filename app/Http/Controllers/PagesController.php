<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{

    public function index()
    {
        return view('home.homepage');
    }
    //

    public function create_tenant()
    {

        return view('admin.create_tenant');
    }



    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return redirect()->route('admin_home');
        } else {
            return view('dashboard');
        }
    }
}
