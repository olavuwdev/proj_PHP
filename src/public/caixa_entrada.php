<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP teste</title>
</head>
<body>
    <?php
    $usuarios = array();
    $usuarios['maria']['nome'] = 'Maria da Silva';
    $usuarios['maria']['id'] = 5974;
    $usuarios['joao']['nome'] = 'Joao Alfredo';
    $usuarios['joao']['id'] = 3618;
    $userLogin = $_POST['login'];
    $userID = $usuarios[$userLogin]['id'];
    ?>
    <h1>Olá! <?php echo $usuarios[$userLogin]['nome']; ?>! </h1>
    <form action="apagar.php" method="POST">
        <ul>
            <li> E-mail 1 </li>
            <li> E-mail 2 </li>
        </ul>
    <h1> <input type="hidden" name="id" value="<?php echo $userID; ?>" /></h1>
    </form>
          
</body>
</html>