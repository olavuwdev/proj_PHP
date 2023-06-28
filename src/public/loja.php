<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Virtual</title>
</head>
<body>
    <?php
    $cupom = "";
    if (isset($_GET['cupom'])) $cupom = trim($_GET['cupom']);
    $cupom_validados = array('NIVER10', 'PROMO15');
    $cupomAceito = in_array($cupom, $cupom_validados);
    ?>
    <h1> <a href="loja.php"> Shopping Virtual</h1>
    <ul>
        <li><a href="p1.php<?php echo ($cupomAceito)?'?cupom='.$cupom:''; ?>">Produto 1 </a></li>
        <li><a href="p2.php<?php echo ($cupomAceito)?'?cupom='.$cupom:''; ?>">Produto 2 </a></li>
    </ul>
    <form action="loja.php" method="GET">
        Cupom de desconto:
        <?php 
            if($cupomAceito){
        ?>
        <strong> <?php echo $cupom; ?> </strong>
        <img src="https://pbs.twimg.com/media/Dn4GpWVXkAENoR9?format=jpg&name=900x900">
        <?php } else {?>
            <input type="text" name ="cupom" /><input type="submit" value="Enviar" /> 
        <?php } ?>
    </form>    
</body>

</html>