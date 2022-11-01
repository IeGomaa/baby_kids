<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminQuestionInterface;
use App\Http\Requests\question\questionCheckIdRequest;
use App\Http\Requests\question\questionCreateRequest;
use App\Http\Requests\question\questionUpdateRequest;

class AdminQuestionController extends Controller
{

    private $questionInterface;
    public function __construct(AdminQuestionInterface $interface)
    {
        $this->questionInterface = $interface;
    }

    public function index()
    {
        return $this->questionInterface->index();
    }

    public function create()
    {
        return $this->questionInterface->create();
    }

    public function insert(questionCreateRequest $request)
    {
        return $this->questionInterface->insert($request);
    }

    public function delete(questionCheckIdRequest $request)
    {
        return $this->questionInterface->delete($request);
    }

    public function update(questionCheckIdRequest $request)
    {
        return $this->questionInterface->update($request);
    }

    public function edit(questionUpdateRequest $request)
    {
        return $this->questionInterface->edit($request);
    }

}
