<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\IncAllModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use IncAllModels;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //
        $users = $this->user->orderBy('id', 'desc')->paginate(15);
        //
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' =>  ['required', 'string', 'min:8', 'confirmed'],
        ]);
        //
        $request['password'] = Hash::make($request->password);
        //
        $this->user->create($request->all());
        //
        return back()->with('msg', trans('site.msg_c'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = $this->user->findOrFail($id);
        //
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        //
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' =>  ['nullable', 'string', 'min:8', 'confirmed'],
        ]);
        //

        if ($request->has('password')) {
            # code...
            $request['password'] = Hash::make($request->password);
        }
        //
        $this->user->find($id)->update($request->all());
        //
        return back()->with('msg', trans('site.msg_u'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $this->user->find($id)->delete();
        //
        return back()->with('msg', trans('site.msg_d'));
    }
}
