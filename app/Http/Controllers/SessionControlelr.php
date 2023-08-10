<?php

namespace App\Http\Controllers;

use App\Models\Lession;
use App\Models\Rolesession;
use App\Models\Session;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionControlelr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Session::all()->sortDesc();
        return view('session.index',['session'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = Teacher::all() ;
        return view('session.create',['teacher'=>$teacher]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->file('anh')->getClientOriginalName();
        $request->file('anh')->storeAs('public/image/',$title);
        $name = $request->input('name');
        $session = $request->input('session');
        $lession = $request->input('lession');
        $nameTeacher = $request->input('nameTeacher');
        $role=$request->input('role');
        if($role==1){
            $cost=0;
            $role = 1;
        }else{
            $cost = $request->input('cost');
            $role = 0;
        }
        $data = [

            'nameSession'=>$name,
            'session'=>$session,
            'lession'=>$lession,
            'teacher_id'=>$nameTeacher,
            'role_session'=>$role,
            'cost'=>$cost,
            'titleimage'=>$title
        ];
        Session::create($data);
        return redirect()->route('session.index');
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
    public function edit(Session $session)
    {
        $teacher  = Teacher::all();
        return view('session.edit',['teacher'=>$teacher],compact('session'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Session $session)
    {
        if($request->file('anh')==''){
            $title = $request->input('image');
        }else{
            $title = $request->file('anh')->getClientOriginalName();
        $request->file('anh')->storeAs('public/image/',$title);
        }
        $name = $request->input('name');
        $sessionz = $request->input('session');
        $lession = $request->input('lession');
        $nameTeacher = $request->input('nameTeacher');
        $role=$request->input('role');
        if($role==1){
            $cost=0;
            $role = 1;
        }else{
            $cost = $request->input('cost');
            $role = 0;
        }
        $session->fill([
            'nameSession'=>$name,
            'session'=>$sessionz,
            'lession'=>$lession,
            'teacher_id'=>$nameTeacher,
            'role_session'=>$role,
            'cost'=>$cost,
            'titleimage'=>$title
        ])->save();

        return redirect()->route('session.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Session $session)
    {
        $session->deleteAt();
        return redirect()->route('session.index');
    }
    public function free_session() {
        $data = DB::table('sessions')
        ->select('*')->where('role_session','=',1)->get();
        return view('index.freesession',['session'=>$data]);
    }
    public function free_resource(Request $request ) {
        $id = $request->id;
        $session = DB::table('sessions')
        ->select('sessions.id','teachers.nameTeacher','sessions.titleimage','sessions.nameSession')
        ->join('teachers','teachers.id','=','sessions.teacher_id')
        ->get();
        $lession = DB::table('lessions')->select('*')->where('id_session','=',$id)->get();
        return view('consource.sourcefree',['lession'=>$lession,'session'=>$session]);
    }
    public function paid_session() {
        $data = DB::table('sessions')
        ->select('*')->where('role_session','=',0)->get();
        return view('index.paidsession',['session'=>$data]);
    }
    public function paid_resource(Request $request) {
        $id = $request->id;
        $session = DB::table('sessions')
        ->select('sessions.id','teachers.nameTeacher','sessions.titleimage','sessions.cost','sessions.nameSession')
        ->join('teachers','teachers.id','=','sessions.teacher_id')
        ->where('sessions.id','=',$id)
        ->get();
        $lession = DB::table('lessions')->select('*')->where('id_session','=',$id)->get();
        return view('consource.sourcepaid',['lession'=>$lession,'session'=>$session]);
    }
}
