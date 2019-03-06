<?php

namespace App\Http\Controllers;


use App\Subject;
use App\Theme;
use Auth;
use Session;
use App\Teacher;
use Illuminate\Http\Request;

class ThemesController extends Controller
{
    public function index()
    {
        return view('admin.themes.index')->with('themes', Theme::all());
    }

    public function create()
    {


        $subjects = Subject::all();

        return view('admin.themes.create')

            ->with('subjects', $subjects);


    }



    public function store(Request $request)
    {
        $teacher = Teacher::where('user_id', Auth::id())->get()->first();
        $this->validate($request,[
            'name' => 'required',
            'subject_id' => 'required',



        ]);

        $theme = Theme::create([
            'name' => $request->name,
            'subject_id' => $request->subject_id,


        ]);

        $theme->save();

        Session::flash('success', 'Theme created successfully!');

        return redirect()->route('themes.index');
    }

    public function edit($id)
    {
        $theme = Theme::findOrFail($id);
        $subjects = Subject::all();

        return view('admin.themes.edit',compact('theme','subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $theme = Theme::findOrFail($id);
        $this->validate($request,[
            'name' => 'required',
            'subject_id' => 'required',

        ]);
        $theme->name=$request->name;
        $theme->subject_id=$request->subject_id;

        $theme->save();

        Session::flash('success','Theme was successfuly updated');
        return redirect()->route('themes.index');
    }

    public function destroy($id)
    {
        Theme::where('id', $id)->forceDelete();

        Session::flash('success', 'Theme deleted successfuly');

        return redirect()->route('themes.index');
    }
}
