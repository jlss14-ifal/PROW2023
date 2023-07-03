<?php
function fibonacci($n) {
    if ($n <= 0) {
        return [];
    } elseif ($n == 1) {
        return [0];
    } elseif ($n == 2) {
        return [0, 1];
    }

    $sequence = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
    }

    return $sequence;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $fibonacci = fibonacci($numero);

    // Convertendo a sequência de Fibonacci em uma string para exibição
    $fibonacciString = implode(", ", $fibonacci);

    echo "<p>A sequência de Fibonacci para o número $numero é:</p>";
    echo "<p>$fibonacciString</p>";
}
?>
