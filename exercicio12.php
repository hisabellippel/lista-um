<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Receber uma string e exibir a quantidade de vogais.</title>
</head>
<body>

   <form method="POST" action="">
        <label for="palavra">  Receber uma string e exibir a quantidade de vogais:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   <?php

            if (isset($_POST['verificar'])) {
            $palavra = $_POST['palavra'];

        function contarVogais(string $texto): int {
            $vogais = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U']; 
            $contador = 0;


            for ($i = 0; $i < strlen($texto); $i++) {
                if (in_array($texto[$i], $vogais)) {
                    $contador++;
                }
            }

            return $contador;
        }

        $numeroDeVogais = contarVogais($palavra);

        echo "A frase \"{$palavra}\" possui {$numeroDeVogais} vogais.";
    };

    ?>
 
</body>
</html>