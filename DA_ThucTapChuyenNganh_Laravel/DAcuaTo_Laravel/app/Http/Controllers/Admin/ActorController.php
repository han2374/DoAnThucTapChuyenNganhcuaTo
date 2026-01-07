<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ActorController extends Controller
{
    /**
     * Display a listing of registered users (actors).
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.actor.index', compact('users'));
    }
}
