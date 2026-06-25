<div>
    <form action="{{ route('professor.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $professor->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $professor->nome }}">

        <label for="periodo">Email</label>
        <input type="text" name="periodo" id="periodo" value="{{ $professor->nome }}">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ $professor->nome }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>