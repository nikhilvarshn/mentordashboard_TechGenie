<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TotalTicketInprogressController extends Controller
{
    public function index(Request $req)
    {
        $users = DB::table('tickets')
            // ->where('mentorid','=', 'MTR-8')
            ->where('ticket_status','=', 2)
            ->get();
        return view('totalticketinprogress', compact('users'));
    }
}
