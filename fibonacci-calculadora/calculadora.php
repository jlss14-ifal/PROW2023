<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado da Calculadora</h2>
    <?php
    function soma($num1, $num2) {
        return $num1 + $num2;
    }
    
    function subtracao($num1, $num2) {
        return $num1 - $num2;
    }
    
    function multiplicacao($num1, $num2) {
        return $num1 * $num2;
    }
    
    function divisao($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Erro: divisão por zero";
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["numero1"];
        $num2 = $_POST["numero2"];
        $operacao = $_POST["operacao"];
        
        switch ($operacao) {
            case "soma":
                $resultado = soma($num1, $num2);
                break;
            case "subtracao":
                $resultado = subtracao($num1, $num2);
                break;
            case "multiplicacao":
                $resultado = multiplicacao($num1, $num2);
                break;
            case "divisao":
                $resultado = divisao($num1, $num2);
                break;
            default:
                $resultado = "Operação inválida";
        }
        
        echo "Resultado: " . $resultado;
    }
    ?>
</body>
</html>
