<?php

namespace App\Http\Controllers;

use App\Models\Question;
use GeneralSettings;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return view('questions', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $attributes = $this->validate($request, [
            'name' => 'required',
            'qn' => 'required',
        ]);

        $question = Question::create($attributes);

        return back();
    }


    public function deleteQuestion(Question $question)
    {
        $question->delete();
        return back();
    }

    public function toggleQuestions(GeneralSettings $settings, Request $request)
    {

        $settings->allow_questions = $request->boolean('status');

        $settings->save();

        return back();
    }
}
