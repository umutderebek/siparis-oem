<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
{
    $this->middleware('auth:admin');
}

    public function index()
    {
        $sbs = Subscribers::all();
        return view('backend.adminpanel',compact('sbs'));
    }
}
