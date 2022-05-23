<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class PasswordUpdate extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:pengunjung'); //If user is not logged in then he can't access this page
    // }

    public function edit($id)
    {
        $users = Profile::find(Auth::user()->id);
        return view('modules.profile.ubahkatasandi', compact('users'));
    }


    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'oldpassword' => 'required',
            'newpassword' => 'required',
        ]);



        $hashedPassword = Auth::user()->password;

        if (\Hash::check($request->oldpassword, $hashedPassword)) {

            if (!\Hash::check($request->newpassword, $hashedPassword)) {

                $users = Profile::find(Auth::user()->id);
                $users->password = bcrypt($request->newpassword);
                Profile::where('id', Auth::user()->id)->update(array('password' =>  $users->password));

                session()->flash('message', 'kata sandi berhasil diubah');
                return redirect()->back();
            } else {
                session()->flash('message', 'kata sandi baru tidak boleh sama dengan kata sandi lama!');
                return redirect()->back();
            }
        } else {
            session()->flash('message', 'kata sandi salah ');
            return redirect()->back();
        }
    }
}
