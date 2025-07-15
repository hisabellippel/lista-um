<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <label for="dia">Dia:</label>
        <input type="float" id="dia" name="dia" required>
        <label for="mes">Mês:</label>
        <input type="float" id="mes" name="mes" required>
        <label for="ano">Ano:</label>
        <input type="float" id="ano" name="ano" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   <?php
if (isset($_POST['verificar'])) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        if (( $dia < 32 ) && ( $mes < 13 ) && ( $ano > 0)){
            echo "data valida";
        }else{
            echo "data invalida";
        };

};


   ?>
</body>
</html>