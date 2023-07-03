<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["operacao"])) {
            require "calculadora.php";
        } elseif (isset($_POST["numero"])) {
            require "fibonacci.php";
        } else {
            echo "<h2>Erro</h2>";
            echo "<section class='section'>";
            echo "<p>Ocorreu um erro ao processar a requisição.</p>";
            echo "</section>";
        }
    } else {
        echo "<h2>Erro</h2>";
        echo "<section class='section'>";
        echo "<p>Ocorreu um erro ao processar a requisição.</p>";
        echo "</section>";
    }
    ?>
</body>
</html>
