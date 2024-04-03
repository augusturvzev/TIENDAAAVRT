<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductosController extends Controller
{
    public function show()
    {
        return view('/productos');
    }

    public function productos(){
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }
        
        $productos = Producto::all();
        $productos = Producto::orderBy('id','desc')->paginate(3);
        return view('admin/productos/index', compact('productos'));
        
    }
    public function createproductos(){
        
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }
        // $productos = Categoria::all();
        
        $productos = Categoria::orderBy('id','desc')->paginate(2);

        return view('admin/productos/create', compact('productos'));
    }
   
    public function storeproductos(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'inventario' => 'required|integer|min:0',
            'id_categoria' => 'required|exists:categoria,id', // Asegúrate de que la categoría exista en la tabla categorias
        ]);

        // Crear un nuevo producto
        Producto::create([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'inventario' => $request->input('inventario'),
            'id_categoria' => $request->input('id_categoria'),
        ]);

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('admin.productos')->with('success', 'Producto agregado exitosamente.');
    }
    public function editproductos($idProducto)
    {
        // Obtener el producto que se va a editar
        $producto = Producto::findOrFail($idProducto);

        // Obtener todas las categorías para el desplegable
        $categorias = Categoria::all();

        // Pasar los datos a la vista de edición
        return view('admin/productos/edit', compact('producto', 'categorias'));
    }

    public function updateproductos(Request $request, $idProducto)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'inventario' => 'required|integer|min:0',
            'id_categoria' => 'required|exists:categoria,id',
        ]);

        // Obtener el producto que se va a actualizar
        $producto = Producto::findOrFail($idProducto);

        // Actualizar los datos del producto
        $producto->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'inventario' => $request->input('inventario'),
            'id_categoria' => $request->input('id_categoria'),
        ]);

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('admin.productos')->with('success', 'Producto actualizado exitosamente.');
    }
    public function destroyproductos($id)
    {
        if(!session('usuario_autenticado')){
            return redirect()->route('login')->with('mensaje', 'Acceso No Autorizado');
        }
        
        $productos = Producto::findOrFail($id);
        $productos->delete();

        return redirect()->route('admin.productos');
    }
}