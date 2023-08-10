<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherResource extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::all();
        return response()->json($teacher);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image/', $image);
        $nameTeacher = $request->input('nameTeacher');
        $skill = $request->input('skill');
        $fb = $request->input('facebook');
        $tw = $request->input('twiter');
        $phone = $request->input('phone');
        $skye = $request->input('skyer');

        $data = [
            'image' => $image,
            'nameTeacher' => $nameTeacher,
            'skill' => $skill,
            'facebook' => $fb,
            'twiter' => $tw,
            'phone' => $phone,
            'skyer' => $skye
        ];
        $teacher = Teacher::create($data);
        return response()->json($teacher);
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return response()->json($teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $nameTeacher = $request->input('nameTeacher');
        $skill = $request->input('skill');
        $fb = $request->input('facebook');
        $tw = $request->input('twiter');
        $phone = $request->input('phone');
        $skye = $request->input('skyer');
        if ($request->file('image') !== null) {
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/image/', $image);
            $teacher->image = $image;
            $teacher->nameTeacher = $nameTeacher;
            $teacher->skill = $skill;
            $teacher->facebook = $fb;
            $teacher->twiter = $tw;
            $teacher->phone = $phone;
            $teacher->skyer = $skye;
            $teacher->save();
            return response()->json($teacher);
        } else {
            $teacher->nameTeacher = $nameTeacher;
            $teacher->skill = $skill;
            $teacher->facebook = $fb;
            $teacher->twiter = $tw;
            $teacher->phone = $phone;
            $teacher->skyer = $skye;
            $teacher->save();
            return response()->json($teacher);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return response(['message' => 'Delete successful']);
    }
}
