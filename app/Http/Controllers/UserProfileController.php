<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function index() {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show(User $user) {
        $user->load('posts');
        return view('users.show', compact('user'));
    }
}