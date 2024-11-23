<?php
function incrementarContador() {
    $arquivo = 'contador.txt'; 
    // Se o arquivo ainda nao existe cria ele e começa o contador em 0
    if (!file_exists($arquivo)) {
        file_put_contents($arquivo, "0"); // Cria o arquivo com o valor inicial 0
    }

    // Le o valor atual do contador no arquivo e converte para um numero inteiro
    $contador = (int)file_get_contents($arquivo);

    // Adiciona 1 ao contador
    $contador++;

    // Salva o novo valor no arquivo para manter o registro atualizado
    file_put_contents($arquivo, $contador);

    // Retorna o novo valor do contador para ser usado onde for necessario
    return $contador;
}

// Aqui chamamos a funçao e exibimos o resultado
echo "Esta pagina ja foi acessada " . incrementarContador() . " vezes.";
?>
