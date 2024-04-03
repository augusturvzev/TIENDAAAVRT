<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    public function usuarios(){
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }
        
        $usuarios = Usuario::all();
        $usuarios = Usuario::orderBy('id','desc')->paginate(3);
        return view('admin/usuarios/index', compact('usuarios'));
        
    }

    public function createusuarios(){
        
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }
      

        return view('admin/usuarios/create');
    }
    public function storeusuarios(Request $request){
        
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }
     

        $request->validate([
            'usuario' => 'required',
            'correo' => 'required',
            'password' => 'required',
            
            
           
        ]);
        try{

            $request['password'] = Hash::make($request['password']);
            
            Usuario::create($request->all());

            return redirect()->route('admin.usuarios');

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
    public function editusuarios($id)
    {
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }


        $usuarios = Usuario::findOrFail($id);
          
            return view('admin/usuarios/edit', compact('usuarios'));


    }
    public function updateusuarios(Request $request, $id)
    {
        if(!session('usuario_autenticado')){
            return redirect()->route('login.index')->with('mensaje', 'Acceso No Autorizado');
        }

        $request->validate([
            'usuario' => 'required',
            'correo' => 'required',
            'password' => 'required',
            
        ]);
    
        $usuarios = Usuario::findOrFail($id);
        
        try{
            $usuarios->update([
                'usuario' => $request->usuario,
                'correo' => $request->correo,
                'password' => $request->password,
               
                


                
              
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

        return redirect()->route('admin.usuarios');
    }
    public function destroyusuarios($id)
    {
        if(!session('usuario_autenticado')){
            return redirect()->route('login')->with('mensaje', 'Acceso No Autorizado');
        }
        
        $usuarios = Usuario::findOrFail($id);
        $usuarios->delete();

        return redirect()->route('admin.usuarios');
    }
}
