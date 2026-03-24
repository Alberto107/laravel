<table border="5">
    <tr>
        <th>
            ID
        </th> 
         <th>
            Nome
        </th>
        <th>
            Preço
        </th>
    </tr>

    @foreach ($produtos as $produto)

    <tr>
        <th>
        {{ $produto['id'] }}
        </th>
        <th>
        {{ $produto['nome'] }}
        </th>
        <th>
        {{ $produto['preco'] }}
        </th>
    </tr>

@endforeach
</table>