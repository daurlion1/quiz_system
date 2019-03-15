<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Auth;
use Session;
use App\Teacher;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.answers.index')->with('answers', Answer::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::all();


        return view('admin.answers.create')
            ->with('questions', $questions);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = Teacher::where('user_id', Auth::id())->get()->first();
        $this->validate($request,[
            'content' => 'required',
            'right' => 'required',
            'question_id' => 'required',



        ]);

        $answer = Answer::create([
            'content' => $request->content,
            'right' => $request->right,
            'question_id' => $request->question_id,


        ]);

        $answer->save();

        Session::flash('success', 'Answer created successfully!');

        return redirect()->route('answers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $answer = Answer::findOrFail($id);
        $questions = Question::all();

        return view('admin.answers.edit',compact('answer','questions'));
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
        $answer = Answer::findOrFail($id);
        $this->validate($request,[
            'content' => 'required',
            'right' => 'required|',
            'question_id' => 'required',

        ]);
        $answer->content=$request->content;
        $answer->right=$request->right;
        $answer->question_id=$request->question_id;
        $answer->save();

        Session::flash('success','Answer was successfuly updated');
        return redirect()->route('answers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Answer::destroy($id);

        Session::flash('success', 'Answer deleted successfuly');

        return redirect()->route('answers.index');
    }
}
