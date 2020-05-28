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

<center> <marquee> <center> <h1> <font font color='#2d2db5'> MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA</font> </h1> </center> </marquee> </center>

<nav class="nav-bar">
    <div class="nav-container"> 
        <a id="nav-menu" class="nav-menu">☰ Menu</a>
        <ul class="nav-list " id="nav">
            <li> <a href="#" id="tile1"><i class="icon ion-ios7-home-outline"></i> Home</a></li>
            <li> <a href="#" id="tile2"><i class="icon ion-ios7-person-outline"></i> About</a></li>
            <li> <a href="#" id="tile3"><i class="icon ion-ios7-briefcase-outline"></i> Portfolio</a></li>
            <li> <a href="#" id="tile4"><i class="ion-ios7-monitor-outline"></i> Services</a></li>
            <li> <a href="#" id="tile5"><i class="ion-ios7-people-outline"></i> Clients</a></li>
            <li> <a href="#" id="tile6"><i class="ion-bag"></i> Order</a></li>
            <li> <a href="#" id="tile7"><i class="ion-ios7-paper-outline"></i> Blog</a></li>
            <li> <a href="#" id="tile8"><i class="ion-ios7-email-outline"></i> Contact</a></li>
        </ul>
    </div>
</nav>

<pre width="80"> </pre>

</center>
	
<?php
// retomando a sessão criada:
 session_start();
 
$_SESSION["vnome"] = $_REQUEST['txtNome']; 
$_SESSION["vcpf"] = $_REQUEST['cpfDigitalizado']; 

echo '<form action="MoratoCarLocadoraSend.php" method="post">';
echo "Nome: "; echo $_SESSION["vnome"];
echo '<pre width="80"> </pre>';
echo "CPF: "; echo $_SESSION["vcpf"];
echo '<pre width="80"> </pre>';
echo '<input type="submit" name="submit" value="PAGAR"/>';
echo '</form>';

//Criando uma saudação para o usuario
echo "<center> <marquee> <center> <h1> <font font color='#FF4500'> MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA       -       MORATO CAR LOCADORA</font> </h1> </center> </marquee> </center>";
echo "<center><p><b><i>© Copyright 2020 - By. 3ds2on.com</i></b></p></center>";  
?>

</body>

</html>