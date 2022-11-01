<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\AdminSliderInterface;
use App\Http\Traits\ImageTraits;
use App\Http\Traits\ModelTrait;
use App\Models\Slider;
use RealRashid\SweetAlert\Facades\Alert;
use function redirect;
use function view;

class AdminSliderRepository implements AdminSliderInterface
{
    private $sliderModel;
    use ImageTraits,ModelTrait;

    public function __construct(Slider $slider)
    {
        $this->sliderModel = $slider;
    }

    public function index()
    {
        $sliders = $this->sliderModel::get();
        return view('Admin/slider/index', compact('sliders'));
    }

    public function create()
    {
        return view('Admin/slider/create');
    }

    public function insert($request)
    {
        $image = $request->image;
        $imageName = time() . '_slider.' . $image->extension();
        $this->sliderModel::create([
            'image' => $imageName
        ]);

        $this->uploadImage($image, $imageName, 'slider');
        Alert::success('Success', '! Slider Was Inserted');
        return redirect(route('admin.slider.index'));
    }

    public function delete($request)
    {
        $model = $this->getRecordById($this->sliderModel, $request->id);
        $imageName = $model->image;
        $model->delete();
        unlink(public_path($imageName));
        Alert::success('Success', '! Slider Was Deleted');
        return redirect()->back();
    }

    public function update($request)
    {
        $slider = $this->getRecordById($this->sliderModel, $request->id);
        return view('Admin/slider/update', compact('slider'));
    }

    public function edit($request)
    {
        $image = $request->image;
        $oldName = $this->getRecordById($this->sliderModel, $request->id)->image;
        $imageName = time() . '_slider.' . $image->extension();
        $this->getRecordById($this->sliderModel, $request->id)->update([
            'image' => $imageName
        ]);

        $this->uploadImage($request->image, $imageName, 'slider', $oldName);
        return redirect(route('admin.slider.index'));
    }

}
