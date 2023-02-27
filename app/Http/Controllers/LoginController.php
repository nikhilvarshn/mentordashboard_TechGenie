<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use Illuminate\Http\Request;
use App\Models\Mentor as ModelsMentor;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login');
    }

    public function store(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $a=Mentor::where('email', $req->email);
        if($a){
            
        }
    }
}
