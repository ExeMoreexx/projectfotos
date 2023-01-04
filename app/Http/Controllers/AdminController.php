<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facade\FlareClient\Http\Client;
use Illuminate\Support\Str;

class AdminController extends Controller {

    public function index() {

        return view('admin.index');

    }
    
}
