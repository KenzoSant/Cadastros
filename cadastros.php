<?php
function gerarIDAluno() {
    return rand(1000, 9999);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];

    if (empty($nome) || empty($sobrenome) || empty($idade) || empty($genero) || empty($nota)) {
        echo "Todos os campos são obrigatórios. <a href='formulario.html'>Voltar</a>";
        exit;
    }

    $idAluno = gerarIDAluno();

    // Concatenar as informações do aluno
    $alunoInfo = "$idAluno, $nome, $sobrenome, $idade, $genero, $nota";

    // Registrar o aluno em um arquivo TXT
    $arquivo = "alunos.txt";
    $arquivoHandle = fopen($arquivo, "a");

    if ($arquivoHandle) {
        fwrite($arquivoHandle, $alunoInfo . "\n");
        fclose($arquivoHandle);
    } else {
        echo "Erro ao abrir o arquivo para registro. <a href='formulario.html'>Voltar</a>";
        exit;
    }
} else {
    echo "O formulário não foi submetido corretamente. <a href='formulario.html'>Voltar</a>";
    exit;
}

header("Location: index.php");
?>
