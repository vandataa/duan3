<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;

class AccountControlelr extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
    public function edit(string $id)
    {
        //
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
    public function login(Request $request)
    {
        return view('account.login');
    }
    public function login_account(Request $request)
    {
        $checkAccount = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        if (Auth::attempt($checkAccount)) {
            return redirect('/')->with('success','Login accept');
        }
        return back()->with('erro','Email or password wrong');
    }
    public function resign(Request $request)
    {
        return view('account.resign');
    }
    public function resign_account(StoreAccountRequest $request)
    {

        if ($request->input('password')== $request->input('comfirm')) {
            $email = $request->input('email');
            $pass = bcrypt($request->input('password'));
            $role = 1;
            $data = [
                'email' => $email,
                'password' => $pass,
                'roles' => $role
            ];
            Account::create($data);
            return view('account.login')->with('success', 'Create account successfuly');
        }else{
            return view('account.resign')->with('erro','Password is diffrent thats ComfirmPassword');
        }
    }
}
