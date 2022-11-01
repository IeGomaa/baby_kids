<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ImageTraits;
use App\Models\teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminTeacherController extends Controller
{

    use ImageTraits;

    public function index()
    {
        $teachers = teacher::get();
        return view('Admin/teacher/index', compact('teachers'));
    }

    public function create()
    {
        return view('Admin/teacher/create');
    }

    /**
     * @param Request $request
     * 1- validation for data
     * 2- insert into database
     * 3- alert
     * 4- redirect to index page
     */
    public function insert(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $file = $request->image;
        $imageName = time() . '_teacher.' . $file->extension();

        teacher::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName
        ]);

        $this->uploadImage($file,  $imageName, 'teacher');
        Alert::success('Success','! Teacher Was Created');
        return redirect(route('admin.teacher.index'));

    }

    /**
     * @param Request $request
     * 1- validation data
     * 2- select data from database
     * 3- delete it from database
     * 4- delete image from public by using public_path
     * 5- session
     * 6- redirect back
     */
    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $teacher = teacher::find($request->id);
        unlink(public_path('uploaded\teacher\\' . $teacher->image));
        $teacher->delete();

        Alert::success('Success', '! Teacher Was Deleted');
        return redirect()->back();
    }

    /**
     * @param Request $request
     * 1- validation data
     * 2- select data
     * 3- return view with data
     */
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $teacher = teacher::find($request->id);
        return view('Admin/teacher/update', compact('teacher'));
    }

    /**
     * @param Request $request
     * 1- validation data
     * 2- select data
     * 3- update image
     * 4- update data
     * 5- alert
     * 6- redirect index page
     */
    public function edit(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $teacher = teacher::find($request->id);
        $file = $request->image;
        $imageName = time() . '_teacher.' . $file->extension();

        $this->uploadImage($file, $imageName, 'teacher', 'uploaded\teacher\\' . $teacher->image);
        $teacher->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName
        ]);

        Alert::success('Success', '! Teacher Was Updated');
        return redirect(route('admin.teacher.index'));

    }

}
