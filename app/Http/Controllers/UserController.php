<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

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

    /**
     * @return response()
     * Ini adalah method 'index' yang ditambahkan.
     */
    public function index(Request $request)
    {
        $users = User::get();
        // Anda mungkin perlu menyesuaikan path view ini.
        // Contoh: return view('user.index', compact('users'));
        // jika file 'index.blade.php' ada di resources/views/user/
        return view('index', compact('users'));
    }

    public function printPdf()
    {
        $users = User::get();
        $data = [
            'title' => 'Welcome To fti.uniska-bjm.ac.id',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
        $pdf = PDF::loadview('mypdf',$data);
        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream('Data User.pdf',array("attachment" => false));
    }

    public function userExcel()
    {
        $users = User::get();
        $data = [
            'title' => 'Welcome To fti.uniska-bjm.ac.id',
            'date' => date('m/d/Y'),
            'users' => $users
        ];
        return view('userexcel', $data);
    }
}