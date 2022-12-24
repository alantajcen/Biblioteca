<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
       public function __construct()
        {
            $this->middleware('auth');
        }

    public function MisDatos()
    {
        return view('modulos.Mis-Datos');
    }

        public function DatosUpdate(Request $request)
    {
        if (auth()->user()->email != request('email')){

            if (isset($datos['passwordN'])){

                $datos = request()->validate([

                    'name' =>['required', 'string', 'max:255'],
                    'email' =>['required', 'email', 'unique:users'],
                    'passwordN' =>['required', 'string', 'min:6']
                ]);

            }else{

                  $datos = request()->validate([

                    'name' =>['required', 'string', 'max:255'],
                    'email' =>['required', 'email', 'unique:users']
                    
                ]);

            }

        }else{

               if (isset($datos['passwordN'])){

                $datos = request()->validate([

                    'name' =>['required', 'string', 'max:255'],
                    'email' =>['required', 'email'],
                    'passwordN' =>['required', 'string', 'min:6']
                ]);
            }else{

                  $datos = request()->validate([

                    'name' =>['required', 'string', 'max:255'],
                    'email' =>['required', 'email']
                    
                ]);

            }


        }


        if(request('documento') ){

            $documento = $request['documento'];

        }else{

            $documento = auth()->user()->documento;
        }


        if(request('fotoPerfil')){

            Storage::delete('public/'.auth()->user()->foto);

            $rutaImg = $request['fotoPerfil']->store('Usuarios/'.$datos["name"], 'public');

        }else{

            $rutaImg = auth()->user()->foto;
        }

        if(isset($datos["passwordN"])){

            DB::table('users')->where('id', auth()->user()->id)->update(['name'=>$datos["name"],'email'=>$datos["email"], 'documento'=>$documento, 'foto'=>$rutaImg, 'password'=>Hash::make($datos["passwordN"])]);

        } else{

            DB::table('users')->where('id', auth()->user()->id)->update(['name'=>$datos["name"],'email'=>$datos["email"], 'documento'=>$documento, 'foto'=>$rutaImg]);

        }

        return redirect('Mis-Datos');
        
    }


      public function index()

    {
        if(auth()->user()->rol != 'Administrador'){

            return redirect('Inicio');

        }

        $usuarios = Usuarios::all();

        return view('modulos.Usuarios')->with('usuarios', $usuarios);
    }


   
    public function store(Request $request)
    {
        $datos = request()->validate([

            'name' =>['string', 'max:255'],
            'rol' => ['required'],
            'email' => ['string', 'unique:users'],
            'password' => ['string', 'min:6']
        ]);

        Usuarios::create([
            'name'=>$datos["name"],
            'email'=>$datos["email"],
            'rol'=>$datos["rol"],
            'password'=>Hash::make($datos["password"]),
            'documento'=>'',
            'foto'=>''

        ]);

        return redirect('Usuarios')->with('UsuarioCreado', 'ok'); 
    }

    public function destroy($id)
    {

        $usuario = Usuarios::find($id);

        $exp = explode("/", $usuario->foto);

        if(Storage::delete('public/'.$usuario->foto)){

            Storage::deleteDirectory('public/'.$exp[0].'/'.$exp[1]);
        }

        Usuarios::destroy($id);

        return redirect('Usuarios');
        
    }


 
    public function edit(Usuarios $id)
    {
        if(auth()->user()->rol != 'Administrador'){

            return redirect('Inicio');
        }

        $usuarios = Usuarios::all();

        $usuario = Usuarios::find($id->id);

        $id = $id->id;

        return view('modulos.Usuarios', compact('usuarios', 'usuario', 'id'));
    }

    
    public function update(Request $request,  $id)
    {
        
        $usuario = Usuarios::find($id);

        if($usuario["email"] != $request->input('email')){
            $datos = request()->validate([

                'name'=>['required'],
                'rol'=>['required'],
                'email'=>['required', 'unique:users'],
                'password'=>[]
            ]);
        }else{

            $datos = request()->validate([

                'name'=>['required'],
                 'rol'=>['required'],
                'email'=>['required', 'email'],
                'password'=>[]

            ]);
        }

        if (!empty($datos["password"]))  {
            $datos["password"] = Hash::make($datos["password"]);
        } else {
            unset($datos["password"]);
        }
        

        //return $datos;
        DB::table('users')
            ->where('id', $usuario["id"])
            ->update($datos);

        return redirect('Usuarios');
    }
    
}
