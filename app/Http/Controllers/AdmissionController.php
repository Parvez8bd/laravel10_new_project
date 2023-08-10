<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function store(Request $request)
    {
        //validation
      $data=  $request->validate([
            'name' => 'required|string|max:100',
            'father_name' => 'nullable|string|max:100',
            'mother_name' => 'nullable|string|max:100',
            'date_of_birth' => 'nullable|date',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'nationality' => 'nullable|string',
            'subject' => 'required|string',
            'gender' => 'nullable|string',
        ]);

        //return all request data
        // return $request->all();

        //create, when data go to 1 table
        Student::create($data);

        //create or when data go to  2 or more table
        // Student::create([
        //     'name' => $request->name,
        //     'father_name' => $request->father_name,
        //     'mother_name' => $request->mother_name,
        // ]);
        // class::create([
        //     'subject' => $request->name,
        // ]);

        //return
       return 'data save done';
    }
}
