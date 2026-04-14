<form action="{{ route('aluno.adicionar') }}" method="post">
    <!-- evitar de invadir pelo formulário -->
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email">

    <button type="submit">Salvar</button>
    <!-- verificação -->
     @isset($sucesso)
         {{ $sucesso }}
    @endisset
</form>