<?php
session_start();
echo $_SESSION['hits']
$_SESSION['hits'] = $_SESSION['hits'] + 1;
$_SESSION['nome'] = 'olavo';
echo $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Esta pagina foi vizualizada " . $_SESSION['hits'] . ' vezes.' ;
    ?>
    
</body>
</html>