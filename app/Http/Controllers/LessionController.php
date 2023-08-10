<?php

namespace App\Http\Controllers;

use App\Models\Lession;
use App\Models\Session;
use Illuminate\Http\Request;

class LessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Lession::all();
        return view('lession.index', ['lession' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Session::all();
        return view('lession.create', ['session' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nameLession = $request->input('name');
        $video = $request->file('video')->getClientOriginalName();
        $request->file('video')->storeAs('public/videos', $video);
        $description = $request->input('description');
        $session = $request->input('session');
        $data = [
            'nameLession' => $nameLession,
            'video' => $video,
            'description' => $description,
            'id_session' => $session
        ];
        Lession::create($data);
        return redirect()->route('lession.index')->with('success', 'created success full');
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
    public function edit(Lession $lession)
    {
        $data = Session::all();
        return view('lession.fix', ['session' => $data], compact('lession'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lession $lession)
    {
        $nameLession = $request->input('name');
        $session = $request->input('session');
        $description = $request->input('description');
        if ($request->file('video') !== null) {
            $video = $request->file('video')->getClientOriginalName();
            $request->file('video')->storeAs('public/videos', $video);
            $lession->fill([
                'nameLession' => $nameLession,
                'video' => $video,
                'description' => $description,
                'id_session' => $session
            ])->save();
        }else{
            $lession->fill([
                'nameLession' => $nameLession,
                'description' => $description,
                'id_session' => $session
            ])->save();
        }
        return redirect()->route('lession.index')->with('success', 'created success full');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
