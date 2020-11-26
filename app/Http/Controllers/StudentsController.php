<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{

    public function index()
    {
        $data = DB::table('users')->select('id', 'name', 'email', 'p_number')->where('access_level', '=', 1)->get();
        $data2 = DB::table('users')->select('id', 'name', 'email', 'p_number')->where('access_level', '=', 2)->get();

        return view('pages.students', compact('data', 'data2'));
    }
}
