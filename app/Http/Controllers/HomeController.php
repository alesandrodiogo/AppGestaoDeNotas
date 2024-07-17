<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->usertype == 'admin') {
            return view('dashboard'); // Redirecionar para a dashboard do admin
        } elseif ($user->usertype == 'user') {
            return view('welcome'); // Redirecionar para a dashboard do usuário comum
        }
    }
}
