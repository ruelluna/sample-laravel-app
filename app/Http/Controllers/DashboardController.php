<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $profile = [
            'name' => 'Polano Wakaila',
            'email' => 'PolanoWakaila@gmail.com',
        ];

        return view('dashboard.index', ['profile'=>$profile]);
    }
}
