<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LoginForm() {
        return view('admin.auth.login');
    }

    public function Index() {
        return view('admin.index');
    }
}
