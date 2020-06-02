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
            <li> <a href="#" id="tile2"><i class="icon ion-ios7-person-outline"></i> R$ 00,50 por KM</a></li>
            <li> <a href="#" id="tile3"><i class="icon ion-ios7-briefcase-outline"></i> Condutor R$ 50,00</a></li>
            <li> <a href="#" id="tile4"><i class="ion-ios7-monitor-outline"></i> Cadeira R$ 250,00</a></li>
            <li> <a href="#" id="tile5"><i class="ion-ios7-people-outline"></i> GPS R$ 350,00</a></li>
            <li> <a href="#" id="tile6"><i class="ion-bag"></i> Seguro R$ 150,00</a></li>
            <li> <a href="#" id="tile7"><i class="ion-ios7-paper-outline"></i> R$ 00,50 por KM</a></li>
            <li> <a href="MoratoCarLocadoraSend.php" id="tile8"><i class="ion-ios7-email-outline"></i> Contato</a></li>
        </ul>
    </div>
</nav>

<pre width="80"> </pre>

</center>
	
<?php
//Estabelecendo interação entre as paginas
session_start(); 
$vnome = $_SESSION["vnome"]; 
$vcpf = $_SESSION["vcpf"]; 
$txtCelular = $_SESSION["txtCelular"]; 
$txtEmail = $_SESSION["txtEmail"]; 
$txtEndereco = $_SESSION["txtEndereco"]; 
$txtRetirada = $_SESSION["txtRetirada"]; 
$txtRetiradaData = $_SESSION["txtRetiradaData"]; 
$txtDevolucao = $_SESSION["txtDevolucao"]; 
$txtDevolucaoData = $_SESSION["txtDevolucaoData"]; 
$txtCondutor = $_SESSION["txtCondutor"]; 
$txtCadeirinha = $_SESSION["txtCadeirinha"]; 
$txtGPS = $_SESSION["txtGPS"]; 
$txtSeguro = $_SESSION["txtSeguro"]; 
$horaRetirada = $_SESSION["horaRetirada"]; 
$horaDevolucao = $_SESSION["horaDevolucao"]; 
$categoria = $_SESSION["categoria"]; 
$modelo = $_SESSION["modelo"]; 
$Total = $_SESSION["Total"];
$pedido = $_SESSION["pedido"];

//Agradecimento e pagamento
echo '<center>';
echo "<b>CONFIRA O TOTAL DO PEDIDO, E EFETUE O PAGAMENTO</b>";echo "<p/>";

echo '<table border="1" bgcolor="#F8F8FF">';
echo '<form>';
echo '<tr bgcolor="#F8F8FF"></tr>';
echo '<tr>';
echo "   <td><center><b> <font color='blue'> Senhor(a): $vnome, seu pedido é $pedido. </font></b></center></td>";
echo '</tr>';
echo '<tr>';
echo "   <td><center><b> <font color='blue'> Você solicitou modelo $modelo, da categoria $categoria. </font></b></center></td>";
echo '</tr>';
echo '<tr>';
echo "   <td><center><b> <font color='blue'> A retirar do veiculo será em nossa unidade $txtRetirada, dia $txtRetiradaData hś $horaRetirada Hs. </font></b></center></td>";
echo '</tr>';
echo '<tr>';
echo "   <td><center><b> <font color='blue'> A devolução do veiculo será em nossa unidade $txtDevolucao, dia $txtDevolucaoData ás $horaDevolucao Hs. </font></b></center></td>";
echo '</tr>';
echo '<tr>';
echo "   <td></td>";
echo '</tr>';
echo '<tr>';
echo "   <td><center><b> <font color='red'> Adicionais </font></b></center></td>";
echo '</tr>';
echo '<tr>';
echo "   <td></td>";
echo '</tr>';
    if ($_SESSION["txtCondutor"] == "sim"){
        echo '<tr>';
        echo "<td><center><b> <font color='blue'>CONDUTOR</font></b></center></td>";
        echo '</tr>';
        }
    if ($_SESSION["txtCadeirinha"] == "sim"){    
        echo '<tr>';
        echo "<td><center><b> <font color='blue'>CADEIRA DE BEBÊ</font></b></center></td>";
        echo '</tr>';
        }
    if ($_SESSION["txtGPS"] == "sim"){
        echo '<tr>';
        echo "<td><center><b> <font color='blue'>GPS</font></b></center></td>";
        echo '</tr>';
        }
    if ($_SESSION["txtSeguro"] == "sim"){
        echo '<tr>';
        echo "<td><center><b> <font color='blue'>SEGURO</font></b></center></td>";
        echo '</tr>';
        }
echo '<tr>';
echo "   <td><center><b> <font color='red'> O valor total da sua locação, somandoos adicionais é R$ $Total; </font></b></center></td>";
echo '</tr>';
echo '<tr>';
echo '   <td><center><input type="button" name="submit" id="btnPagamento" value="EFETUAR PAGAMENTO"/></center><td>';
echo '</tr>';
echo '</form>';
echo '</table>';


echo '<pre width="80"> </pre>';
echo '<pre width="80"> </pre>';
echo '<pre width="80"> </pre>';
echo '<pre width="80"> </pre>';

//Enviando sua menssagem
echo '	<b><center><span  style="color:#ff0000;" id="CPFinvalidoVetor"> </span></center></b>';
echo '   <b><center><span  style="color:#008000;" id="CPFvalidoVetor"> </span></center></b>';
echo '   <b><center><span  style="color:#008000;" id="MensagemEnviada"> </span></center></b>';
echo '<b> FALE CONOSCO :-) </b>';
echo '<table border="1" bgcolor="#F8F8FF">';
echo '<form>';
echo '<tr bgcolor="#F8F8FF"></tr>';
echo '<tr>';
echo '   <td>  NOME  <input name="firstname" type="text" </td>';
echo '</tr>';
echo '<tr>';
echo '   <td> E-MAIL <input name="firstname" type="text" id="txtEmail"></td>';
echo '</tr>';
echo '<tr>';
echo '   <td>CPF <input type="text" id="txtCPF" size="30" maxlength="11" /></td>';
echo '</tr>';
echo '<tr>';
echo '   <td>CELULAR <input name="firstname" type="text" id="txtCelular"></td>';
echo '</tr>';
echo '<tr>';
echo '   <td>OBSERVAÇÕES <textarea name="message" rows="3" cols="50" id="txtMensagem">';
echo '   DIGITE AQUI A SUA MENSAGEM...';
echo '   </textarea>';
echo '   </td>';
echo '</tr>';
echo '</form>';
echo '</table>';

echo '<tr>';
echo '   <center><input type="button" name="submit" id="btnMensagem" value="ENVIAR MENSAGEML"/> </center>';
echo '   <p>';
echo '   </td>';
echo '</tr>';
echo '</center>';


echo "</br>";  
echo "</br>";  
echo "</br>";  

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