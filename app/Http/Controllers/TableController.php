<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TableController extends Controller
{
    public function index()
    {
        $data = DB::table('courses')->select('week_day', 'hour', 'room', 'link', 'group', 'lecturer')->get();
        return view('pages.table', compact('data'));
    }
}
