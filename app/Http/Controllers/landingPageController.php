<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class landingPageController extends Controller
{
    public function index() {
        $users = User::all();
        
       // dd($users);
        
        return view('landingPage', [
            'users' => $users
        ]);
        
    }
}