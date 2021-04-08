<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class HomeViewController extends Controller
{
    public function index()
    {
        $list = Customer::skip(120)->take(20)->get();
        return view('welcome', compact('list'));
    }
}
