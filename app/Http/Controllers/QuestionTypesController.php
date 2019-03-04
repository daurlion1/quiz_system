<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionType;
use Illuminate\Http\Request;
use Session;

class QuestionTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.question_types.index')->with('question_types', QuestionType::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $question_type = QuestionType::create([
            'name' => $request->name,
        ]);

        $question_type->save();

        Session::flash('success', 'Question type created Successfuly!');

        return redirect()->route('question_types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.question_types.edit')->with('question_type', QuestionType::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $question_type = QuestionType::FindOrFail($id);
        $question_type->name = $request->name;
        $question_type->save();

        Session::flash('success', 'Quesion Type updated successfully!');

        return redirect()->route('question_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        QuestionType::destroy($id);

        Session::flash('success','Question type deleted successfully!');

        return redirect()->route('question_types.index');
    }
}
