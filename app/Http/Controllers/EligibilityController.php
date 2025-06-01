<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EligibilityController extends Controller
{
    public function check(){
        $name = 'karan';
        $age = 21;
        $location = 'Rajkot';
        $skills = ['PHP', 'Laravel', 'JavaScript'];

        return view('eligibility', [
            'name' => $name,
            'age' => $age,
            'location' => $location,
            'skills' => $skills
        ]);
    }
}
