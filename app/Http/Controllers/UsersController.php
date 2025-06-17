<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        // $product = Product::findOrFail($id);
        $users = User::paginate(10);
        
        return view('components.dashboard.users', compact('users'));
    }
}
