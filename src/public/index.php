<html>
    <head>
        <title> PHP test </title>
        <style type="text/css">
            p {
        
                font-size:50px;
            }
            body{
                text-align: center;
                background-color:green;
                font-family: Georgia, serif;
                font-size:200%
            }
            
            </style>
        
    </head>
    <body>
        <?php
        date_default_timezone_set('America/Fortaleza');
        $data = date('d/m/Y - ');
        $hora = date('H');
        echo $data . $hora . "Horas" ;
        if ($hora<12){
            $mensagem = " Bom dia!";
        }elseif(date('h') > 11 && date('H') < 18){
            $mensagem = " Boa tarde!";
            $mensagem .= ' Aceita um chá gelado?';
        }elseif(date("H") > 17){    
            $mensagem = "Boa noite!";
        }
        echo " Olá <br>" . $mensagem;
        phpinfo()
        ?>
        
        <?php
        
        //declare(strict_types=1);
        
            /* $contador = 1;
            $mensagem = "Olá";
            $versao = array('1.1','2','3.4');
            //print_r($versao)
            $primeiro_nome = "Maria ";
            echo $primeiro_nome;
            $ultimo_nome = "\n Lourdes";
            echo $ultimo_nome 
            $time = array('Maria', 'Jose', 'Ana');
            echo $time[2];
            echo '<br />';
            print_r($time);
            
            $valor1 = 15;
            $valor1 +=5;
            
            echo $valor1;
            echo 'a: [' . TRUE . ']<br />';
            echo 'a: [' . FALSE . ']<br />';
            $idade = 50;
            
            echo 'e: [' . $idade . ']<br />'; 
            
            #Uso do SWITCH

            $menu = 'index';
            switch($menu){
                case 'index':
                    echo "<p>Escolheu a pagina inicial</p>";
                    break;
                case 'sobre':
                    echo 'Escolheu a pagina sobre ';
                    break;
                case 'novidades':
                    echo 'Escolheu a página Novidades';
                    break;
            }
            
            # uso do IF e ELSE

            $tanque = 10;
            echo $tanque <= 1 ? 'Abastecer agora <br />' : 'Combustivel OK <br /> ';
            
            $statusTanque = $tanque <= 1 ? FALSE : TRUE;
            
            if($statusTanque) echo 'Combustivel OK';
            else echo 'Procurar um posto para abastecer.';
            
            #uso do WHILE

            $cout = 1;
            
            while($cout <=10){
                echo $cout . 'x 10 =' . $cout*10 . '<br />';
                ++$cout;
            }
            
            
            $vegetais = array('jerimum', 'batata', 'tomate');
            $vegetais[] = 'cebola';
            
            var_dump($vegetais);
            
            echo 'Hoje vou cozinhar ' . $vegetais[0] . '<br />';
            echo 'Hoje vou cozinhar ' . $vegetais[1] . '<br />';
            echo 'Hoje vou cozinhar ' . $vegetais[2] . '<br />';

            echo 'Vegetais disponiveis: ' . count($vegetais) . '<br />';
            
            $total = count($vegetais);
            
            for($i=0;$i<$total;$i++){
                echo "Hoje eu vou cozinhar ". $vegetais[$i] . '<br />';
            }
            
            $vegetais = array(
                'jerimum <br />'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIMnPJmHeNAgdFc2bc4zyakQkjXgt7Xb4ec-4-5--1aQ&s', 
                'batata <br /> '=>'https://dynamicassets.basf.com/is/image/basf/BR-cultura-da-batata:1x1?dpr=off&fmt=webp-alpha&fit=crop%2C1&wid=1076&hei=1076',
                'tomate <br />'=>'https://s2.glbimg.com/JTFA920LbTAUeTN1JF00ql7oH7Y=/0x0:4032x3024/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_59edd422c0c84a879bd37670ae4f538a/internal_photos/bs/2022/y/w/lwZf9ETcWr2Oslxcx3Ng/eddie-pipocas-gk6jpxwk5ze-unsplash.jpg'
            );
            foreach($vegetais as $chave=>$valor){
                echo 'Hoje eu vou cozinhar ' . $chave . "<img src=\"$valor\" width= '200', height = '200' /><br />"; 
            }
            $estoqueCarros = array(
                array('Palio', 10, 125),
                array('Gol', 15, 200),
                array('Civic', 4, 38)
            );
            echo 'Temos: ' . $estoqueCarros[0][1] . ' ' . $estoqueCarros[0][0] . '<br/> Vendidos: ' . $estoqueCarros[0][2];        
            print_r($_GET);
            */

            ?>
    </body>
</html>