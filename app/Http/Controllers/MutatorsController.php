<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class MutatorsController extends Controller
{

    public function index()
    {
        $user = User::first();

        return $user->name_and_email;
    }

    public function casts() {
        return User::first();
    }

    public function mutators() {

       return User::create([
        "name" => "bruno",
        "email" => "bruno@gnul.com",
        "idade" => 23
       ]);
    }
}
