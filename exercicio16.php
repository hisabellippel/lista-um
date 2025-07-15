<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="nome">Informe seu nome:</label>
        <input type="float" id="nome" name="nome" required>
         <label for="idade">Informe sua idade:</label>
        <input type="float" id="idade" name="idade" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

<?php
     if (isset($_POST['verificar'])) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if ( $idade < 16){
            echo " $nome não pode votar";
        }else{
            echo " $nome pode votar";
        };

    };

?>
</body>
</html>