<?php

namespace curso\Http\Controllers;

use Illuminate\Http\Request;
use curso\User;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function perfil()
    {
        $user = User::find(Auth::user()->id);

        return view('usuarios/perfil', array('user' => $user));
    }

    public function editarPerfil(Request $request)
    {
        $user = User::FindOrFail(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;

        if($user->password !== $request->password)
        {
            $user->password = bcrypt($request->password);
        }
        
        $user->save();

        Session::flash('mensaje', 'Perfil actualizado!');
        return back();
    }
}