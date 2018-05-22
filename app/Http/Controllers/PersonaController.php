<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Persona;
use App\Organismo;

class PersonaController extends Controller
{
    public function obtenerVistaAlta()
    {
        $organismos = Organismo::all();

        return view('personas.alta')->with(['organismos'=> $organismos]);
    }

    public function store(Request $request)
    {
        // mensajes de error predefinidos
        $messages = [
          'required' => 'El campo :attribute es requerido.',
        ];

        // validaciones
        $request->validate([
            'nombre' => 'required|max:15',
            'apellido' => 'required',
            'genero' =>'required',
            'email' => 'required|email',
        ], $messages);

        // agrego nueva persona
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->genero = $request->genero;
        $persona->domicilio = $request->domicilio;
        $persona->email = $request->email;
        $persona->organismo_id = $request->organismo_id;
        $persona->save();

        //redirecciono al formulario de carga con el mensaje de éxito
        return redirect()
                ->route('persona.alta.view')
                ->with('status', 'La persona '.$persona->nombre.' '.$persona->apellido.' fue agregada con éxito.');
    }

    public function obtenerVistaModificar($id)
    {
        //busco la persona a mandar a la vista para ser editada
        $persona = Persona::with('organismo')->find($id);

        //busco todos los organismos para el select
        $organismos = Organismo::all();

        return view('personas.modificar', array('persona' => $persona, 'organismos' => $organismos));
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);

        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->email = $request->email;
        $persona->organismo_id = $request->organismo_id;

        $persona->save();

        return redirect()
              ->route('persona.alta.view')
              ->with('status', 'La persona '.$persona->nombre.' '.$persona->apellido.' fue modificada con éxito.');
    }

}
