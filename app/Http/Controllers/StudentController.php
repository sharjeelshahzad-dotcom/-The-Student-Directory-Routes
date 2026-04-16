<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Ye raha wo 'index' function jo missing tha
    public function index()
    {
        // Mock data: Students ki list
        $students = [
            ['id' => 1, 'name' => 'Sharjeel Shahzad'],
            ['id' => 2, 'name' => 'Ali Ahmed'],
            ['id' => 3, 'name' => 'Sara Khan'],
        ];

        return view('students.index', compact('students'));
    }

    // Ye profile page ke liye function hai
    public function show($id)
    {
        return view('students.show', ['id' => $id]);
    }
}