<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request){
        $serchTerm = $request->input('search');

        $users = [
            ['name'=> 'Rahul', 'city' => 'Mumbai'],
            ['name' => 'Sneha', 'city' => 'Pune'],
            ['name' => 'Karan', 'city' => 'Delhi'],
        ];

        $results =  array_filter($users, function($users) use ($serchTerm) {
            return stripos($users['name'], $serchTerm) !==false;
        });
        
        return view('search', [
            'results' => $results,
            'searchTerm' => $serchTerm
        ]);
    }
}
