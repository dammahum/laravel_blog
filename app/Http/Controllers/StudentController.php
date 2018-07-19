<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Student;


class StudentController extends Controller
{
    public function index()
    {
        return view('student');
    }
    
    public function get_datatable()
    {
        // Using Eloquent
        return Datatables::eloquent(Student::query())->make(true);
    }
}
