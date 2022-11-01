<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\question\questionCheckIdRequest;
use App\Http\Requests\question\questionCreateRequest;
use App\Http\Requests\question\questionUpdateRequest;
use App\Models\question;
use RealRashid\SweetAlert\Facades\Alert;

class AdminQuestionController extends Controller
{

    private $questionModel;
    public function __construct(question $question)
    {
        $this->questionModel = $question;
    }

    public function index()
    {
        $questions = $this->questionModel::get();
        return view('Admin/question/index', compact('questions'));
    }

    public function create()
    {
        return view('Admin/question/create');
    }

    /**
     * @param questionCreateRequest $request
     * 1- validation data
     * 2- insert into database
     * 3- set session
     * 4- redirect to index page
     */
    public function insert(questionCreateRequest $request)
    {
        $this->questionModel::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        Alert::success('Success', '! Question Was Inserted');
        return redirect(route('admin.question.index'));
    }


    /**
     * @param questionCheckIdRequest $request
     * 1- validation data
     * 2- delete record
     * 3- set session
     * 4- redirect back
     */
    public function delete(questionCheckIdRequest $request)
    {
        $this->questionModel::find($request->id)->delete();
        Alert::success('Success', '! Question Was Deleted');
        return redirect()->back();
    }

    /**
     * @param questionCheckIdRequest $request
     * 1- validation data
     * 2- select record
     * 3- redirect to edit page
     */
    public function update(questionCheckIdRequest $request)
    {
        $question = $this->questionModel::find($request->id);
        return view('Admin/question/update', compact('question'));
    }

    /**
     * @param questionUpdateRequest $request
     * 1- validation data
     * 2- edit data
     * 3- set session
     * 4- redirect index page
     */
    public function edit(questionUpdateRequest $request)
    {
        $this->questionModel::find($request->id)->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        Alert::success('Success', '! Question Was Updated');
        return redirect(route('admin.question.index'));
    }

}
