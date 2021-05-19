<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
//        $users = DB::select("SELECT * FROM users");

        // To get all the users
        $users = User::all()->sortByDesc('id');

//        dd($users);

        // log

        return view('admin.index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('admin.users.show', ['user' => $user]);
    }

    public function remove($id)
    {
        $user = User::find($id);


        $user->delete();

        return redirect()->route('admin_users');
    }
}
