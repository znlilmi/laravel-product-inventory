<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * @return response()
     */
    public function dashboard(Request $request)
    {
        return view('dashboard');
    }

    /**
     * @return response()
     */
    public function users(Request $request)
    {
        $users = User::get();
        return view('users', compact('users'));
    }
}
