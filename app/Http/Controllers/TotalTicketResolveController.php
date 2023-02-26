<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TotalTicketResolveController extends Controller
{
    public function index(Request $req)
    {
        $users = DB::table('tickets')
            ->where('mentorid','=', 'MTR-8')
            ->where('ticket_status','=', 3)
            ->get();
        return view('totalticketresolve', compact('users'));
    }
}

