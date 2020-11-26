<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CoursesController extends Controller
{
    public function index()
    {
        $active = DB::table('courses')->select('id', 'name', 'score', 'credit')->where('status', '=', 1)->get();
        $archive = DB::table('courses')->select('id', 'name', 'score', 'credit')->where('status', '=', 2)->get();
        $available = DB::table('courses')->select('id', 'name', 'requirement', 'credit')->where('status', '=', 3)->get();

        return view('pages.courses', compact('active', 'archive', 'available'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'lecturer' => 'required',
            'week_day' => 'required',
            'hour' => 'required',
            'room' => 'required',
            'group' => 'required',
        ]);


        \App\Courses::create($data);
    }
}
