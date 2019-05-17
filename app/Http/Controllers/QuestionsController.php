<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\Quiz;
use App\QuestionType;
use App\Theme;
use Auth;
use Session;
use App\Teacher;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index()
    {
        return view('admin.questions.index')->with('questions', Question::all());
    }

    public function create()
    {

        $quizzes = Quiz::all();
        $question_types = QuestionType::all();
        $themes = Theme::where('name', '!=', 'Audial')->where('name', '!=', 'Visual')->get();

        return view('admin.questions.create')
            ->with('themes', $themes)
            ->with('quizzes', $quizzes)
            ->with('question_types', $question_types);

    }



    public function store(Request $request)
    {
        $teacher = Teacher::where('user_id', Auth::id())->get()->first();
        $this->validate($request,[
            'title' => 'required',
            'question_value' => 'required|integer|between:1,5',
            'quiz_id' => 'required',
            'theme_id' => 'required',


        ]);

        $question = Question::create([
            'title' => $request->title,
            'quiz_id' => $request->quiz_id,
            'theme_id' => $request->title_id,
            'question_value' => $request->question_value,
            'question_type_id' => 1,


        ]);

        $question->save();

//        foreach ($request->input() as $key => $content) {
//            if (strpos($key, 'content') !== false && $content != '') {
//              Answer::create(
//                    [
//                        'question_id' => $question->id,
//                        'content' => $request->content,
//                        'right' => $request->right,
//                    ]);
//
//            }
//
//        }
//        Answer::create(
//            [
//                'question_id' => $question->id,
//                'content' => $request->content,
//                'right' => $request->right,
//            ]);
//
        Session::flash('success', 'Question created successfully!');

        return redirect()->route('questions.index');
    }

    public function edit($id)
    {
        $themes = Theme::where('name', '!=', 'Audial')->where('name', '!=', 'Visual')->get();
        $question = Question::findOrFail($id);
        $quizzes = Quiz::all();
        $question_types = QuestionType::all();
        return view('admin.questions.edit',compact('question','quizzes','question_types','themes'));
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
        $question = Question::findOrFail($id);
        $this->validate($request,[
            'title' => 'required',
            'question_value' => 'required|integer|between:1,5',
            'quiz_id' => 'required',
            'theme_id' => 'required',
        ]);
        $question->title=$request->title;
        $question->question_value=$request->question_value;
        $question->quiz_id=$request->quiz_id;
        $question->theme_id=$request->theme_id;
        $question->save();

        Session::flash('success','Question was successfuly updated');
        return redirect()->route('questions.index');
    }

    public function destroy($id)
    {
        Question::where('id', $id)->forceDelete(image_type_to_extension( cubrid_db_parameter()));

        Session::flash('success', 'Question deleted successfuly');

        return redirect()->route('questions.index');
    }
}
