<?php

class PersonaController extends Controller
{
	public function all(Request $req)
	{
		//date cuenta que no te importa de donde vengan las personas
		//y que para probar la vista no necesitas tener la base de datos ej:

		$personas = [
			new Persona(['id'=>1, 'nombre'=>'Marianne-1']),
			new Persona(['id'=>2, 'nombre'=>'Marianne-2']),
			new Persona(['id'=>3, 'nombre'=>'Marianne-3']),
			new Persona(['id'=>4, 'nombre'=>'Marianne-4'])
		];

		//cuando ya tengas la base datos integras ej:
		$personas = Persona::all();

		//date cuenta que el codigo a continuacion nunca cambia por que 
		//y esto se debe al presentador
		return View::make(
			'nombreVista', 
			[ 'presenter'=> new PersonaList( $personas ) ]
		);
	}

}