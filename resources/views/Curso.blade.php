@foreach($cursos as $curso)

    <h3>Nome: {{ $curso->nome}}</h3>
    <h3>Horário: {{ $curso->horario}}</h3>



@endforeach
