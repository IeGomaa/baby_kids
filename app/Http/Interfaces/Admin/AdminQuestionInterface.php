<?php

namespace App\Http\Interfaces\Admin;

interface AdminQuestionInterface
{
    public function index();

    public function create();

    public function insert($request);

    public function delete($request);

    public function update($request);

    public function edit($request);
}
