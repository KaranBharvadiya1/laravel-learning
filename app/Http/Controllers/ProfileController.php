<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $people = [
        ['name' => 'Rahul', 'message' => 'Good Morning!'],
        ['name' => 'Sneha', 'message' => 'Have a nice day!'],
        ['name' => 'Karan', 'message' => 'Keep coding!'],
        ];


        return view('profile', [
            'people' => $people
        ]);
    }
}
