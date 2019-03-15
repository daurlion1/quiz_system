<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function courses(){
        return view('userSide.courses')->with('subjects', Subject::all());
    }
}
