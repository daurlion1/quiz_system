<?php

namespace App\Http\Controllers;

use App\Department;
use App\Subject;
use App\Teacher;
use Illuminate\Http\Request;
use Session;
use Auth;

class TeachersController extends Controller
{
    public function index(){
        return view('admin.teachers.index')->with('teachers', Teacher::all());
    }

    public function create(){
        $subjects = Subject::all();
        $departments = Department::all();
        return view('admin.teachers.create')
            ->with('subjects', $subjects)
            ->with('departments', $departments);
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'department_id' => 'required',
            'user_id'

        ]);

        $teacher = Teacher::create([
            'name' => $request->name,
            'department_id' => $request->department_id,
            'user_id' => $request->user_id,
        ]);
        $teacher->subjects()->attach($request->subjects);

        $teacher->save();

        Session::flash('success', 'Teacher created successfully!');

        return redirect()->route('teachers.index');

    }
    public function edit($id){

        $teacher = Teacher::findOrFail($id);
        $subjects = Subject::all();
        $departments = Department::all();
        return view('admin.teachers.edit',compact('teacher','subjects','departments'));
    }

    public function update($id, Request $request){
        $teacher = Teacher::findOrFail($id);
        $this->validate($request,[
           'name' => 'required|max:255',
           'department_id' => 'required'
        ]);
        $teacher->name=$request->name;
        $teacher->department_id=$request->department_id;
        $teacher->subjects()->sync($request->subjects);
        $teacher->save();

        Session::flash('success','Teachers was successfuly updated');
        return redirect()->route('teachers.index');
    }

    public function destroy($id)
    {
        Teacher::destroy($id);

        Session::flash('success', 'Teacher deleted successfuly');

        return redirect()->route('teachers.index');
    }
}
