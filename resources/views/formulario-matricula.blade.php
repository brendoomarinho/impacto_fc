<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>
</head>
<body>

<h1>Cadastro de Aluno</h1>

<form action="{{ route('matricula.store') }}" method="post">
    <label for="nome_aluno">Nome do Aluno:</label>
    <input type="text" id="nome_aluno" name="nome_aluno" required><br><br>

    <label for="cpf_identidade">CPF ou Identidade:</label>
    <input type="text" id="cpf_identidade" name="cpf_identidade" required><br><br>

    <label for="data_nascimento">Data de Nascimento:</label>
    <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required><br><br>

    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" name="bairro" required><br><br>

    <label for="complemento">Complemento:</label>
    <input type="text" id="complemento" name="complemento"><br><br>

    <label for="numero">Número:</label>
    <input type="text" id="numero" name="numero" required><br><br>

    <label for="municipio">Município:</label>
    <input type="text" id="municipio" name="municipio" required><br><br>

    <label for="nome_pai">Nome do Pai:</label>
    <input type="text" id="nome_pai" name="nome_pai"><br><br>

    <label for="nome_mae">Nome da Mãe:</label>
    <input type="text" id="nome_mae" name="nome_mae"><br><br>

    <label for="telefone1">Telefone de Contato 1:</label>
    <input type="tel" id="telefone1" name="telefone1" required><br><br>

    <label for="telefone2">Telefone de Contato 2:</label>
    <input type="tel" id="telefone2" name="telefone2"><br><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
