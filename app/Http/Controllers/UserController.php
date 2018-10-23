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

    /**
     * Cargar perfil de usuario.
     */
    public function perfil()
    {
        $user = User::find(Auth::user()->id); //Busqueda de usuario por id.

        return view('usuarios/perfil', array('user' => $user)); //Envío a vista del usuario encontrado.
    }

    /**
     * Editar perfil de usuario.
     */
    public function editarPerfil(Request $request)
    {
        $user = User::FindOrFail(Auth::user()->id); //Busqueda de usuario por id.
        $user->name = $request->name; //Captura de campo name.
        $user->email = $request->email; //Captura de campo email.

        if($user->password !== $request->password) //Verificación de password modificado.
        {
            $user->password = bcrypt($request->password); //Captura de campo password.
        }
        
        $user->save(); //Update en la base de datos.

        Session::flash('mensaje', 'Perfil actualizado!'); //Cargar mensaje flash.
        return back(); //Volver a la vista.
    }
}