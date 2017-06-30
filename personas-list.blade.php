<!-- aqui tienes a dispocion el presenter y donde sea que vallas a inyectar datos usas el presenter-->
@foreach ($presenter->getListaPersonas() as $persona)
    <p>Persona Id {{ $persona->id }}</p>
    <p>Persona Nombre {{ $persona->nombre }}</p>
@endforeach

