<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\Admin\AdminSliderInterface;
use App\Http\Requests\slider\CheckIdSliderRequest;
use App\Http\Requests\slider\CreateSliderRequest;
use App\Http\Requests\slider\UpdateSliderRequest;

class AdminSliderController extends Controller
{

    private $sliderInterface;

    public function __construct(AdminSliderInterface $interface)
    {
        $this->sliderInterface = $interface;
    }

    public function index()
    {
        return $this->sliderInterface->index();
    }

    public function create()
    {
        return $this->sliderInterface->create();
    }

    public function insert(CreateSliderRequest $request)
    {
        return $this->sliderInterface->insert($request);
    }

    public function delete(CheckIdSliderRequest $request)
    {
        return $this->sliderInterface->delete($request);
    }

    public function update(CheckIdSliderRequest $request)
    {
        return $this->sliderInterface->update($request);
    }

    public function edit(UpdateSliderRequest $request)
    {
        return $this->sliderInterface->edit($request);
    }
}
