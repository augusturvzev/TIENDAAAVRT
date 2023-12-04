<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function categoria(){
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }
        
       
        $categoria = Categoria::all();
        $categoria = Categoria::orderBy('id','desc')->paginate(3);
        return view('admin/categoria/index', compact('categoria'));
       
    }
    public function createcategoria(){
        
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }
      

        return view('admin/categoria/create');
    }
    public function storecategoria(Request $request){
        
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }
     

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
           
        ]);
        try{
            
            Categoria::create($request->all());

            return redirect()->route('admin.categoria');

        }catch(QueryException $e){
            $errorCode = $e->getCode();
           
            if ($errorCode === '23000') {

                //return "El registro tiene un campo duplicado <br>".$e->getMessage();
                return "El registro tiene un campo duplicado";
            }
            else if ($errorCode === '22001') {

                //return "El registro tiene un campo duplicado <br>".$e->getMessage();
                return "El registro tiene un campo mas grande de lo esperado";
            }
            else{
                throw $e;
            }
        }

    }

    public function editcategoria($id)
    {
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }
  

        $categoria = Categoria::findOrFail($id);
          
            return view('admin/categoria/edit', compact('categoria'));


    }
    public function updatecategoria(Request $request, $id)
    {
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
    
        $categoria = Categoria::findOrFail($id);
        
        try{
            $categoria->update([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
              
            ]);
        }catch(QueryException $e){
        $errorCode = $e->getCode();
        
        if ($errorCode === '23000') {

            //return "El registro tiene un campo duplicado <br>".$e->getMessage();
            return "El registro tiene un campo duplicado";
        }
        else if ($errorCode === '22001') {

            //return "El registro tiene un campo duplicado <br>".$e->getMessage();
            return "El registro tiene un campo mas grande de lo esperado";
        }
        else{
            throw $e;
        }
    }

        return redirect()->route('admin.categoria');
    }
    public function destroycategoria($id)
    {
        if(!session('usuario_autenticado')){
            return redirect()->route('login')->with('mensaje', 'Acceso No Autorizado');
        }
        
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('admin.categoria');
    }


}
