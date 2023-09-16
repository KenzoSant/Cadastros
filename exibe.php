<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/Icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/css/style4.css">

    <title>Lista de Alunos</title>
</head>
<body>


    <main class="main" id="main">

        <section class="exibe section" id="sec">
            
            <div class="exibe__alunos container">
            <h2 class="title">Lista de Alunos Registrados</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Idade</th>
                    <th>Gênero</th>
                    <th>Nota</th>
                </tr>

                <?php
                    $arquivo = "alunos.txt";
                    $arquivoHandle = fopen($arquivo, "r");

                    if ($arquivoHandle) {
                        while (($linha = fgets($arquivoHandle)) !== false) {
                            $dados = explode(", ", $linha);
                            echo "<tr>";
                            foreach ($dados as $dado) {
                                echo "<td>$dado</td>";
                            }
                            echo "</tr>";
                        }
                        fclose($arquivoHandle);
                    } else {
                        echo "Erro ao abrir o arquivo de alunos.";
                    }
                ?>
            </table>

            <input class="form__button input__voltar" type="submit" value="Voltar" onclick="voltar()">
            </div>
        </section>

    </main>


    <script src="./assets/js/main1.js"></script>

</body>
</html>
