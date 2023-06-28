<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P1 PHP</title>
</head>
<body>
<?php
    $cupons['NIVER10']=10;
    $cupons['PROMO15']=15;
    $desconto = 0;
    if(isset($_GET['cupom'])){
        $desconto = $cupons[$_GET['cupom']];
    }
    $preço = 200;
?>
<h1><a href="loja.php">
    <img src=https://img.freepik.com/vetores-premium/loja-flat-vector-icon_9206-120.jpg?w=826"></a>
    Shopping Virtual</h1>
    <img src="https://blog.elgscreen.com/wp-content/uploads/2023/01/297_TECLADO.jpgS" />
    <h3> Preço: R$ <?php echo (($preço * (100 - $desconto)/100 )); ?>
</body>
</html>
