<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function list()
    {
        return view('club/list',['clubs'=>Club::all()]);
    }
    public function get_detail_by_id($id)
    {
        return view('club/detail',['club'=> Club::findOrFail($id)]);
    }
    public function list_by_category($category)
    {
        return view('club/list_category',['clubs'=>Club::where()];)
    }
}
