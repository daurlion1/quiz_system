<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Session;
use App\User;
use App\Profile;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.profile') -> with('user', Auth());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this -> validate($request,[
            'name' => 'required',
            'surname' => 'required'
        ]);

        $user = Auth::user();

        if($request->hasFile('avatar'))
        {
            $avatar =$request -> avatar;
            $avatar_new_name = time().$avatar->getClientOriginalName();
            $avatar ->move('uploads/avatars', $avatar_new_name);
            $user -> profile -> avatar = 'uploads/avatars/'.$avatar_new_name;
            $user -> profile ->save();
        }

        $user -> name = $request -> name;
        $user -> profile -> surname = $request -> surname;
        $user -> save();
        $user -> profile ->save();

        Session::flash('success', 'Account profile updated');

        return redirect()->route('index');
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
    }
}
