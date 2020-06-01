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

<b><center><span  style="color:#ff0000;" id="CPFinvalidoVetor"> </span></center></b>
<b><center><span  style="color:#008000;" id="CPFvalidoVetor"> </span></center></b>
<b><center><span  style="color:#008000;" id="MensagemEnviada"> </span></center></b>

<center> <center> <h4> <FONT FACE=Times COLOR="#ff0000"><b>QUAL CATEGORIA E MODELO DE VEICULO VOCÊ DESEJA?</b></FONT></h2>
<table border="5" bgcolor="#F8F8FF">
<tr>
   <td>COMPACTOS...? <select name="txtCompacto"  id="txtCompacto">
     <option value="0">--------------------------</option>      
     <option value="CHEVROLET CRUZE">CHEVROLET CRUZE</option>
     <option value="VOLKSWAGEM GOLF">VOLKSWAGEM GOLF</option>
     <option value="FORD FOCUS">FORD FOCUS</option>
    </select> 
   </td>
</tr>
<tr>
   <td>SEDAN.............? <select name="txtSedan"  id="txtSedan">
     <option value="0">--------------------------</option>      
     <option value="HONDA CIVIC">HONDA CIVIC</option>
     <option value="HYUNDAI ELANTRA">HYUNDAI ELANTRA</option>
     <option value="TOYOTA COROLA">TOYOTA COROLA</option>
    </select> 
   </td>
</tr>
<tr>
   <td>PIKUPs.............? <select name="txtPikup"  id="txtPikup">
     <option value="0">-----------------------</option>      
     <option value="FORD RANGER">FORD RANGER</option>
     <option value="CHEVROLET S10">CHEVROLET S10</option>
     <option value="VOLKSWAGEN AMAROX">VOLKSWAGEN AMAROX</option>
    </select> 
   </td>
</tr>
<tr>
   <td>HATCH..............? <select name="txtHatch"  id="txtHatch">
     <option value="0">--------------------------</option>
     <option value="BMW 157">BMW 157</option>
     <option value="VOLVO XC60">VOLVO XC60</option>
     <option value="MERCEDES GLA800">MERCEDES GLA800</option>
    </select> 
   </td>
</tr>
<tr>
   <td>SUV..................? <select name="txtSuv"  id="txtSuv">
     <option value="0">--------------------------</option>
     <option value="CHEVROLET CAPITIVA">CHEVROLET CAPITIVA</option>
     <option value="HYUNDAI IX35">HYUNDAI IX35</option>
     <option value="NISAN TIGUAN">NISAN TIGUAN</option>
    </select> 
   </td>
</tr>
</table>   


<h2><FONT COLOR="#2d2db5"><b>POR GENTILEZA, INFORME SEUS DADOS PESSOAIS.</b></FONT></h2>
<table border="5" bgcolor="#F8F8FF">
<tr bgcolor="#b3e3d4"></tr>
<form method="post"> 
<tr>
   <td>NOME:  <input name="txtNome" type="text" size="30" id="txtNome"></td>
</tr>
<tr>
   <td>CPF: <input name="txtCPF" type="text" id="txtCPF" size="30" maxlength="11" /></td>
</tr>
<tr>
   <td>TELEFONE: <input name="txtCelular" type="text" size="30" id="txtCelular"></td>
</tr>
<tr>
   <td>E-MAIL: <input name="txtEmail" type="text" size="30" id="txtEmail"></td>
</tr>
<tr>
   <td>ENDEREÇO: <input name="txtEndereco" type="text" size="30" id="txtEndereco"></td>
</tr>
</table>   

<h2><FONT COLOR="#2d2db5"><b>PARA FINALIZAR, SELECIONE OS DETALHES DO SEU PEDIDO.</b></FONT></h2>
<table border="5" bgcolor="#F8F8FF">
<tr>
   <td>UNIDADE DE RETIRADA?<select name="txtRetirada" id="txtRetirada">
     <option value="estacao">ESTAÇÃO</option>
     <option value="etec">ETEC</option>
    </select> 
   </td>
</tr>

<tr>
   <td>DATA RETIRADA: <input type="date" name="txtRetiradaData"  id="txtRetiradaData"> 
       HORA RETIRADA: <input type="text" name="txtRetiradaHora" size="1" maxlength="2" id="txtRetiradaHora">
   </td>
</tr>

<tr>
   <td>UNIDADE DE DEVOLUÇÃO?<select name="txtDevolucao" id="txtDevolucao">
     <option value="estacao">ESTAÇÃO</option>
     <option value="etec">ETEC</option>
    </select> 
   </td>
</tr>

<tr>
   <td>DATA DEVOLUÇÃO: <input type="date" name="txtDevolucaoData"  id="txtDevolucaoData"> 
       HORA DEVOLUÇÃO: <input type="text" name="txtDevolucaoHora" size="1" maxlength="2" id="txtDevolucaoHora">
   </td>
</tr>

<tr>
   <td>PRCISA DE CONDUTOR? <select name="txtCondutor"  id="txtCondutor">
     <option value="sim">SIM</option>
     <option value="nao">NÃO</option>
    </select> 
   </td>
</tr>

<tr>
   <td>PRECISA DE CADEIRINHA? <select name="txtCadeirinha"  id="txtCadeirinha">
     <option value="sim">SIM</option>
     <option value="nao">NÃO</option>
    </select> 
   </td>
</tr>

<tr>
   <td>PRECISA DE GPS? <select name="txtGPS"  id="txtGPS">
     <option value="sim">SIM</option>
     <option value="nao">NÃO</option>
    </select> 
   </td>
</tr>

<tr>
   <td>DESEJA ATRIBUIR SEGURO? <select name="txtSeguro"  id="txtSeguro">
     <option value="sim">SIM</option>
     <option value="nao">NÃO</option>
    </select> 
   </td>
</tr>

</form>
</table>   

<pre width="80"> </pre>

<td>
   <center><input type="button" name="submit" id="btnValidaCPFvetor" value="ENVIE SEU PEDIDO"/> </center>
</td>

</center>

<pre width="80"> </pre>
	
<?php
session_start(); //Estabelecendo interação entre as paginas

//Criando uma saudação para o usuario
echo "<center> <marquee> <center> <h1> <font font color='#FF4500'> MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA</font> </h1> </center> </marquee> </center>";
echo '<pre width="80"> </pre>';
echo "<b>NOSSAS UNIDADES:</b></p>";  
echo "<b>UNIDADE 1 - ESTAÇÃO FCO MORATO (Belem Capela, Francisco Morato - SP)</b></p>";  
echo "<b>UNIDADE 2 - ETEC (R. Tupinambás, 572 - Jardim Nova Belem, Francisco Morato - SP, 07909-065)</b>";  
echo '<pre width="80"> </pre>';
echo '<pre width="80"> </pre>';
echo "<center><p><b><i>© Copyright 2020 - By. 3ds2on.com</i></b></p></center>";  
?>

</body>

</html>