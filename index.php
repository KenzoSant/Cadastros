<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/Icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./assets/css/style5.css">

    <title>Login</title>
</head>
<body>
    
    <main class="main" id="main">

       <!-- FORMULARIO -->
        <section class="formulario section" id="form">
            <div class="form container">
                <div class="form__img">
                    <img src="./assets/img/happy-student-animat-two.svg" alt="" class="img">
                    
                </div>

                <div class="form__cad">
                    <form class="form__alunos" action="cadastros.php" method="post">
                    <h2 class="title">Lista de Alunos Registrados</h2>
                        <div class="form__group">
                            <label for="nome">Nome:</label> 
                            <input type="text" class="form__control" id="nome" name="nome" required>
                        </div>

                        <div class="form__group">
                            <label for="sobrenome">Sobrenome:</label>
                            <input type="text" class="form__control" id="sobrenome" name="sobrenome" required>    
                        </div>
                        
                        <div class="form__group">
                            <label for="idade">Idade:</label>
                            <input type="number" class="form__control" id="idade" name="idade" required>
                        </div>

                        <div class="form__group">
                            <label>Gênero:</label>
                            <div class="masc">
                                <label for="masculino">Masculino</label>
                                <input type="radio" class="" id="masculino" name="genero" value="Masculino" required>
                            </div>
                            
                            <div class="fem">
                                <label for="feminino">Feminino</label>
                                <input type="radio" class="" id="feminino" name="genero" value="Feminino" required>
                            </div>
                        </div>

                        <div class="form__group">
                            <label for="nota">Nota:</label>
                            <input type="number" class="form__control" id="nota" name="nota" step="0.01" min="0" max="10" required>
                        </div>      

                        <input class="form__button" type="submit" value="Cadastrar" id="cad">
                        <input class="form__button" type="submit" value="Ver Cadastro" id="ver">
                    </form>
                </div>
            </div>
        </section>

    </main>

    <script src="./assets/js/main1.js"></script>
    <script type='text/javascript'>document.addEventListener('DOMContentLoaded', function () {window.setTimeout(document.querySelector('svg').classList.add('animated'),1000);})</script>

</body>
</html>