<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view("users.index",[
            "users" => $users
        ]);
    }

    public function create()
    {
        return view("users.create");
    }

    public function store()
    {

    }

    public function show()
    {

    }

    public function edit(User $user)
    {
        return view("users.create",[
            "user" => $user
        ]);
    }

    public function destroy()
    {

    }
}
