<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainClientController extends Controller
{
    public function index(){
        return view('client.pages.main.index');
    }
    public function order(){
        return view('client.pages.order.index');
    }
}
