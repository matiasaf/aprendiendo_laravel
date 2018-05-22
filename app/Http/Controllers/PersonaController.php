<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Persona;
use App\Organismo;

class PersonaController extends Controller
{
    public function getAltaView()
    {
        $organismos = Organismo::all();

        return view('personas.alta')->with(['organismos'=> $organismos]);
    }

    public function store(Request $request)
    {

        $messages = [
          'required' => 'El campo :attribute es requerido.',
        ];

        $request->validate([
            'nombre' => 'required|max:15',
            'apellido' => 'required',
            'genero' =>'required',
            'email' => 'required|email',
        ], $messages);

        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->genero = $request->genero;
        $persona->domicilio = $request->domicilio;
        $persona->email = $request->email;
        $persona->organismo_id = $request->organismo_id;

        $persona->save();

        return redirect()
                ->route('persona.alta.view')
                ->with('status', 'La persona '.$persona->nombre.' '.$persona->apellido.' fue agregada con éxito.');
    }
}
