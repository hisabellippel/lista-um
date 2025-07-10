<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST" action="">
        <label for="numero">Informe o número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name = "informar">Verificar</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       

        $numero = $_POST['numero'];

        if($numero > 0){
            echo "Esse número é posistivo";
        }elseif($numero < 0){
            echo "Esse número é negativo";
        }else{
            echo "Esse número é zero";
        };

    };

    ?>
</body>
</html>