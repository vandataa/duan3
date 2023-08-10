<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Teacher::all();
        $top4 = Teacher::all()->take(4);
        return view('teacher.index', ['teacher' => $data, 'top' => $top4]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Teacher::all();

       return view('teacher.new',['teacher'=>$data]);
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
            'image'=>$image,
            'nameTeacher'=>$nameTeacher,
            'skill'=>$skill,
            'facebook'=>$fb,
            'twiter'=>$tw,
            'phone'=>$phone,
            'skyer'=>$skye
        ];
        Teacher::create($data);
        return redirect()->route('teacher.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request , Teacher $teacher )
    {
        $nameTeacher = $request->input('nameTeacher');
        $skill = $request->input('skill');
        $fb = $request->input('facebook');
        $tw = $request->input('twiter');
        $phone = $request->input('phone');
        $skye = $request->input('skyer');
        if($request->file('image')!== null){
            $image = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/image/', $image);
            $teacher->fill( [
                'image'=>$image,
                'nameTeacher'=>$nameTeacher,
                'skill'=>$skill,
                'facebook'=>$fb,
                'twiter'=>$tw,
                'phone'=>$phone,
                'skyer'=>$skye
            ])->save();
        }
        else{
            $teacher->fill( [

                'nameTeacher'=>$nameTeacher,
                'skill'=>$skill,
                'facebook'=>$fb,
                'twiter'=>$tw,
                'phone'=>$phone,
                'skyer'=>$skye
            ])->save();
        }
        return redirect()->route('teacher.index')->with('success');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
