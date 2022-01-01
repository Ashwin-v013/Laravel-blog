<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatreonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:ROLE_PATREON');
    }

    public function index()
    {
        return view('patreon.home');
    }
}
