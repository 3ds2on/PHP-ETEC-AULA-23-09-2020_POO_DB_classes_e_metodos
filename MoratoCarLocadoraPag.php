<!DOCTYPE <html>
<html lang="pt-br">
<meta charset="utf-8"/>
<body bgcolor="#b3e3d4">

<head>
    <title>MORATO CAR LOCADORA</title>       
    
    <!PARA A BARRA SUPERIOR - https://www.sanwebe.com/2015/07/making-a-full-width-responsive-tiled-menu-with-css3-jquery>
    <link rel="stylesheet" type="text/css" href="css/barrasuperior/estilo.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery-2.1.0.min.js" type="js/barrasuperior/javascript.js"></script>    
   
    
    <!PARA A PAGINA HOME>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/funcoes.js"></script>
    <link rel="stylesheet" type="text/css"  href="estilo.css"/>      
    
</head>

<center>

<pre width="80"> </pre>

<center> 
<img class="mySlides" src="imagens/1.jpg">
<img class="mySlides" src="imagens/2.jpg">
<img class="mySlides" src="imagens/3.jpg">
<img class="mySlides" src="imagens/4.jpg">
<img class="mySlides" src="imagens/5.jpg">
<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
</center> 
<center> <marquee> <center> <h2> <FONT FACE=Times COLOR="#0000AA">MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA</FONT> </h2> </marquee> </center>

<nav class="nav-bar">
    <div class="nav-container"> 
        <a id="nav-menu" class="nav-menu">☰ Menu</a>
        <ul class="nav-list " id="nav">
            <li> <a href="MoratoCarLocadora.php" id="tile1"><i class="icon ion-ios7-home-outline"></i> Inicio</a></li>
            <li> <a href="#" id="tile2"><i class="icon ion-ios7-person-outline"></i> R$ 00,50 o KM</a></li>
            <li> <a href="#" id="tile3"><i class="icon ion-ios7-briefcase-outline"></i> Condutor R$ 300,00</a></li>
            <li> <a href="#" id="tile4"><i class="ion-ios7-monitor-outline"></i> Cadeira R$ 150,00</a></li>
            <li> <a href="#" id="tile5"><i class="ion-ios7-people-outline"></i> GPS R$ 100,00</a></li>
            <li> <a href="#" id="tile6"><i class="ion-bag"></i> Seguro R$ 250,00</a></li>
            <li> <a href="#" id="tile7"><i class="ion-ios7-paper-outline"></i> R$ 00,50 o KM</a></li>
            <li> <a href="MoratoCarLocadoraSend.php" id="tile8"><i class="ion-ios7-email-outline"></i> Contato</a></li>
        </ul>
    </div>
</nav>

<pre width="80"> </pre>

</center>
	
<?php
// retomando a sessão criada:
 session_start();

// VALIDANDO DADOS DO FORMULARIO (DADOS PESSOAIS)
$_SESSION["vnome"] = $_REQUEST['txtNome']; 
$_SESSION["vcpf"] = $_REQUEST['cpfDigitalizado']; 
$_SESSION["txtCelular"] = $_REQUEST['txtCelular']; 
$_SESSION["txtEmail"] = $_REQUEST['txtEmail']; 
$_SESSION["txtEndereco"] = $_REQUEST['txtEndereco']; 

// VALIDANDO DADOS DO FORMULARIO (ADICIONAIS)
$_SESSION["txtRetirada"] = $_REQUEST['txtRetirada']; 
$_SESSION["txtRetiradaData"] = $_REQUEST['txtRetiradaData']; 
$_SESSION["txtDevolucao"] = $_REQUEST['txtDevolucao']; 
$_SESSION["txtDevolucaoData"] = $_REQUEST['txtDevolucaoData']; 
$_SESSION["txtCondutor"] = $_REQUEST['txtCondutor']; 
$_SESSION["txtCadeirinha"] = $_REQUEST['txtCadeirinha']; 
$_SESSION["txtGPS"] = $_REQUEST['txtGPS']; 
$_SESSION["txtSeguro"] = $_REQUEST['txtSeguro']; 
$_SESSION["horaRetirada"] = $_REQUEST['horaRetirada']; 
$_SESSION["horaDevolucao"] = $_REQUEST['horaDevolucao']; 


// VALIDANDO DADOS DO FORMULARIO (CARRO)
$_SESSION["categoria"] = $_REQUEST['categoria']; 
$_SESSION["modelo"] = $_REQUEST['modelo']; 

//Converte SESSION em variavel
$tempo_inicio = $_SESSION["txtRetiradaData"];
$tempo_fim = $_SESSION["txtDevolucaoData"];
$horaRetirada  = $_SESSION['horaRetirada'];
$horaDevolucao  = $_SESSION['horaDevolucao'];
$modelo = $_SESSION["modelo"];
$categoria = $_SESSION["categoria"];

//Converte os dias em minutos
$dateStart = new \DateTime($tempo_inicio);
$dateNow = new \DateTime($tempo_fim);
$dateDiff = $dateStart->diff($dateNow);
$minutos = $dateDiff->i + (($dateDiff->h + ($dateDiff->days * 24)) * 60);

//Converte os minutos em horas
$horas = $minutos/60;

//Subtrai a hora de retiradas
$horasN = $horas - $horaRetirada;

//Soma a hora de devolução
$horasF = $horasN + $horaDevolucao;

//KM por hora
$km = $horasF * 4.17;


echo '<form action="MoratoCarLocadoraSend.php" method="post">';
echo '<pre width="80"> </pre>';
echo '<pre width="80"> </pre>';
echo "<b>DADOS PESSOAIS: </b>";
echo '<pre width="80"> </pre>';
echo "Senhor(a): "; echo $_SESSION["vnome"];echo "<p/>";
echo "CPF: "; echo $_SESSION["vcpf"];echo "<p/>";
echo "Celular: "; echo $_SESSION["txtCelular"];echo "<p/>";
echo "E-mail: "; echo $_SESSION["txtEmail"];echo "<p/>";
echo "Endereço: "; echo $_SESSION["txtEndereco"];echo "<p/>";
echo '<pre width="80"> </pre>';
echo '<pre width="80"> </pre>';
echo "<b>DETALHES DO VEICULO: </b>";
echo '<pre width="80"> </pre>';
echo "Você escolheu o modelo "; echo $_SESSION["modelo"]; echo ", da categoria "; echo $_SESSION["categoria"];echo "<p/>";
echo "Local de retirada: "; echo $_SESSION["txtRetirada"];echo "<p/>";
echo "Data da retirada: "; echo $_SESSION["txtRetiradaData"];echo "<p/>";
echo "Local para devolução: "; echo $_SESSION["txtDevolucao"];echo "<p/>";
echo "Data para devolução: "; echo $_SESSION["txtDevolucaoData"];echo "<p/>";
echo '<pre width="80"> </pre>';
echo '<pre width="80"> </pre>';
echo "<b>DADOS FINANCEIROS, LEIA COM ATENÇÂO: </b>";echo "<p/>";
echo "<b> <font color='red'> Cada KM custa R$ 00,50. </font></b>";echo "<p/>";
echo "<b> <font color='red'> De 0 a 500.4 KMs, não cobramos valor adicional ao KM |De 500.5 a 550.4 KMs, cobramos valor adicional de R$ 0,25 a cada KM. </font></b>";echo "<p/>";
echo "<b> <font color='red'> De 550.5 a 650.4 KMs, cobramos valor adicional de R$ 0,75 a cada KM | Acima de 650.5 KMs, cobramos valor adicional de R$ 5,00 a cada KM. </font></b>";echo "<p/>";

echo '<pre width="80"> </pre>';
echo "Você contratou: "; echo $horasF; echo " horas dos nossos serviços";echo "<p/>";
    //Checando se será cobrado KM adicional
    if ($km <= 500.4){
    echo "Isso equivale a : "; echo $km; echo " KMs, cada KM custará R$ 00,50 " ; echo " você não pagará KM adicional!";echo "<p/>";
    $Pagamentokm = $km * 0.50;
    echo $km;echo "KMs  X  ";echo "R$ 00,50  =  R$ ";echo$Pagamentokm;
    }
    else if ($km > 500.4 && $km <= 550.4){
    echo "Isso equivale a : "; echo $km; echo " KMs, você pagará R$ 0,25 adicional sobre cada KM!";echo "<p/>";
    $Pagamentokm = $km * (0.50 + 0.25);
    echo $km;echo "KMs  X  ";echo "R$ 00,75  =  R$ ";echo$Pagamentokm;
    
    }
    else if ($km > 550.4 && $km <= 650.4){
    echo "Isso equivale a : "; echo $km; echo " KMs, você pagará R$ 0,75 adicional sobre cada KM!";echo "<p/>";
    $Pagamentokm = $km * (0.50 + 0.75);
    echo $km;echo "KMs  X  ";echo "R$ 1,25  =  R$ ";echo$Pagamentokm;
    }
    else if ($km > 650.4){
    echo "Isso equivale a : "; echo $km; echo " KMs, você pagará R$ 5,00 adicional sobre cada KM!";echo "<p/>";
    $Pagamentokm = $km * (0.50 + 5.00);
    echo $km;echo "KMs  X  ";echo "R$ 5,50  =  R$ ";echo$Pagamentokm;
    }
echo '<pre width="80"> </pre>';
echo '<pre width="80"> </pre>';
echo "<b>ITENS ADICIONAIS DO PEDIDO: </b>";
echo '<pre width="80"> </pre>';


    if ($_SESSION["txtCondutor"] == "sim"){
        echo "você solicitou condutor, será acresentado R$ 300,00 em seu pedido.: ";echo "<p/>";
        $Pagamentokm = $Pagamentokm + 300.00;
        }
    if ($_SESSION["txtCadeirinha"] == "sim"){    
        echo "você solicitou cadeirinha de BeBe, será acresentado R$ 150,00 em seu pedido.: ";echo "<p/>";
        $Pagamentokm = $Pagamentokm + 150.00;
        }
    if ($_SESSION["txtGPS"] == "sim"){
        echo "você solicitou GPS, será acresentado R$ 100,00 em seu pedido.: ";echo "<p/>";   
        $Pagamentokm = $Pagamentokm + 100.00;
        }
    if ($_SESSION["txtSeguro"] == "sim"){
        echo "você solicitou seguro, será acresentado R$ 250,00 em seu pedido.: ";echo "<p/>";    
        $Pagamentokm = $Pagamentokm + 250.00;
        }
echo '<pre width="80"> </pre>';
echo "<b> <font color='red'> O total do seu pedido é R$ $Pagamentokm </font></b>";echo "<p/>";
echo 'Se você concorda com as informações acima, clique em: ';echo '<input type="submit" name="submit" value="FINALIZAR COMPRA!"/>';echo "<p/>";
echo 'Caso deseje alterar alguma informação em seu pedido, clique em: ';echo "<input type='button' value='VOLTAR' onclick='history.go(-1)' />";echo "<p/>";
echo '</form>';

//Criando uma saudação para o usuario
echo "<center>";
echo "<center> <marquee> <center> <h1> <font font color='#FF4500'> MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA</font> </h1> </center> </marquee> </center>";
echo '<pre width="80"> </pre>';
echo "<b>NOSSAS UNIDADES:</b></p>";  
echo "<b>UNIDADE 1 - ESTAÇÃO FCO MORATO (Belem Capela, Francisco Morato - SP)</b></p>";  
echo "<b>UNIDADE 2 - ETEC (R. Tupinambás, 572 - Jardim Nova Belem, Francisco Morato - SP, 07909-065)</b>";  
echo '<pre width="80"> </pre>';
echo '<pre width="80"> </pre>';
echo "<center><p><b><i>© Copyright 2020 - By. 3ds2on.com</i></b></p></center>";  
echo "</center>";
?>

</body>

</html>