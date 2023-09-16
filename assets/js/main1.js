var botaoRedirecionar = document.getElementById("ver");
botaoRedirecionar.onclick = function() {
    window.location.href = "exibe.php";
};

function voltar() {
    // Use window.location.href para redirecionar o usuário para outra página
    window.location.href = "index.php";
  }