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
//Estabelecendo interação entre as paginas
session_start(); 

//Agradecimento pela compra
echo '<pre width="80"> </pre>';
echo "SENHOR(A): "; echo $_SESSION["vnome"]; 
echo "</br>";  
echo "OBRIGADO POR ADIQUIRIR NOSSOS SERVIÇOS!!! ";
echo '<pre width="80"> </pre>';



echo '<center>';
echo '	<b><center><span  style="color:#ff0000;" id="CPFinvalidoVetor"> </span></center></b>';
echo '   <b><center><span  style="color:#008000;" id="CPFvalidoVetor"> </span></center></b>';
echo '   <b><center><span  style="color:#008000;" id="MensagemEnviada"> </span></center></b>';
echo '<b>FALE CONOSCO ;-) </b>';
echo '<table border="1" bgcolor="#F8F8FF">';
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

echo '</table>';

echo '<tr>';
echo '   <center><input type="button" id="btnValidaCPFvetor" value="ENVIAR" /> </center>';
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