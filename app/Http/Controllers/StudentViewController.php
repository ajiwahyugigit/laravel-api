<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentViewController extends Controller
{
    public function index()
    {
        return view('pages.students.index');
    }
}
