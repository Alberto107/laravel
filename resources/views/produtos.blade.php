<h1>Id: {{ $id }}</h1>
<h1>Nome: {{ $nome }}</h1>

<!-- <a href="{{ route('produtos', ['id'=>333, 'nome'=>'Carro']) }}">Produtos</a> -->

@foreach ($produtos as $produto)
    <tr>
        <td>{{ $produto-> $nome}}</td>
        <td>{{ $produto-> $nome }}</td>

        <a href="{{ route('produtos', ['id'=>333, 'nome'=>'Carro']) }}">Produtos</a> -->
    </tr>

@endforeach