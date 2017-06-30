<?php

//el presentador tendra funciones getters con los datos que necesitara la vista
//cualquier dato que tu neceites pintar en la vista debera ser devuelto por el presentador
//atravez de un metodo getNombreDeLaPropiedad()
class PersonaList
{
	public function __construct($listaPersona = [])
	{
		$this->listaPersona = $listaPersona;
	}

	public function getListaPersonas()
	{
		return $this->listaPersona;
	}

}