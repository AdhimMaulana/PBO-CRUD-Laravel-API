<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
        
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        
    }
}
