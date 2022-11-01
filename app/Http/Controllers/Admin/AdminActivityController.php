<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::get();
        return view('Admin/activity/index', compact('activities'));
    }

    public function create()
    {
        return view('Admin/activity/create');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
            'background' => 'required'
        ]);

        Activity::create([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
            'background' => $request->background
        ]);

        Alert::success('Success','! Activity Was Inserted');
        return redirect(route('admin.activity.index'));
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:activities,id'
        ]);

        Activity::find($request->id)->delete();
        Alert::success('Success','! Activity Was Deleted');
        return redirect()->back();
    }

    public function update(Request $request) {
        $request->validate([
            'id' => 'required|exists:activities,id'
        ]);
        $activity = Activity::find($request->id);
        return view('Admin/activity/update', compact('activity'));
    }

    public function edit(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
            'background' => 'required'
        ]);

        Activity::find($request->id)->update([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
            'background' => $request->background
        ]);

        Alert::success('Success','! Activity Was Updated');
        return redirect(route('admin.activity.index'));
    }

}
