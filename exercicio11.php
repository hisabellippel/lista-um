<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar se uma palavra é um palíndromo.</title>
</head>
<body>

   <form method="POST" action="">
        <label for="palavra"> Verifique se a palavra é palíndroma:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   <?php

    
        if (isset($_POST['verificar'])) {
            $palindroma = $_POST['palavra'];

            if ($palindroma == strrev($palindroma)) {
            echo' Essa palavra é palindroma';
            } else {
            echo' Essa palavra não é palindroma'; 
            };   
             
        };

?>
 
</body>
</html>