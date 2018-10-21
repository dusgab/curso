<?php

namespace curso\Http\Controllers;

use Illuminate\Http\Request;
use curso\Producto;
use curso\Categoria;
use Session;

class ProductoController extends Controller
{
    //

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function listar()
    {
    	$productos = Producto::orderBy('descripcion', 'ASC')->get();

    	return view('productos/productos', array('productos' => $productos));
    }

    public function listarId($id)
    {
    	$producto = Producto::find($id);

    	return view('productos/producto', array('producto' => $producto));
    }

    public function agregar()
    {
    	$categorias = Categoria::orderBy('descripcion', 'ASC')->get();

    	return view('productos/nuevo', array('categorias' => $categorias));
    }

    public function store(Request $request)
    {
        $prod = new Producto();
        $prod->cat_id = $request->cat_id;
        $prod->descripcion = ucwords($request->descripcion);
        $prod->marca = ucwords($request->marca);
        $prod->cantidad = $request->cantidad;
        $prod->precio = $request->precio;

        $prod->save();
        
        Session::flash('mensaje', 'Producto agregado!');
        return back();
    }

    public function eliminar($id)
    {
        $prod = Producto::find($id);
        $prod->delete();

        Session::flash('mensaje', 'Producto eliminado!');
        return back();
    }

}
