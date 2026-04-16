<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest; // Ye line hamesha namespace ke neeche aati hai

class StudentController extends Controller
{
    // 1. All Students List
    public function index()
    {
        $students = [
            ['id' => 1, 'name' => 'Sharjeel Shahzad'],
            ['id' => 2, 'name' => 'Ali Ahmed'],
            ['id' => 3, 'name' => 'Sara Khan'],
        ];

        return view('students.index', compact('students'));
    }

    // 2. Register Form dikhane ke liye
    public function create() 
    {
        return view('students.create');
    }

    // 3. Data validate aur save karne ke liye
    public function store(StoreStudentRequest $request) 
    {
        return "Student validated successfully!";
    }

    // 4. Single Profile dikhane ke liye
    public function show($id)
    {
        return view('students.show', ['id' => $id]);
    }
}