<?php
// Inclui o arquivo que contém a funçao para incrementar o contador
include 'contador.php';

// Chama a funçao 'incrementarContador' para obter o numero atualizado de acessos
$contador = incrementarContador();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Acessos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

        <!-- Cabeçalho da pagina -->
        <h1>Bem-vindo à Página!</h1>
        
        <!-- Mostra o numero de vezes que a pagina foi acessada -->
        <p>Esta pagina foi acessada <strong><?php echo $contador; ?></strong> vezes.</p>
    </div>
</body>
</html>
