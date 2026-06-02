<div>
    <form action="{{ route('curso.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="periodo">Período</label>
        <input type="text" name="periodo" id="periodo">

        <button type="submit">Enviar</button>
        
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($cursos)
            @foreach($cursos as $curso)
            <tr>
                <td>
                    <h3>{{ $curso->nome }}</h3>
                    <h3>{{ $curso->periodo }}</h3>
                </td>
                <td>
                    <form action="{{ route('curso.remove', ['id' => $curso->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                    </form>
                </td>
                <td>
                    <button type="submit">Atualizar</button>
                </td>
            </tr>
            @endforeach
    @endisset
    
</div>