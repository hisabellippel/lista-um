<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form method = "POST" action="">
        <label for="numero">Calcular a tabuada do número informado:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name = "informar_tabuada">Verificar</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       

            $numero = $_POST['numero'];

            if($numero > 0 and $numero < 11)
            {
                for($i = 0; $i < 11; $i++)
                {
                    echo "$i X $numero = " . $i*$numero . "<br>";
                };
            };

    };

    ?>
</body>
</html>