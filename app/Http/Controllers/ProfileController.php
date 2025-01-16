<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProfileController extends BaseController
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('profile', [
            'user' => \Illuminate\Support\Facades\Auth::user()
        ]);
    }
}
