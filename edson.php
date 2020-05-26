 <!DOCTYPE <html>
<html lang="pt-br">
<meta charset="utf-8"/>
<body bgcolor="#FFFAFA">

<head>
    <title> PRIMEIRA AULA PHP </title>
</head>

<center>
<pre width="80"> </pre>
<h1>QUE AULA  DIFICIL  ;-)</h1>

<pre width="80"> </pre>

<form action="edson.php" method="post"> 
    Digite o Primeiro Numero:  <input type="text" name="numeroum" /><br />
    Digite o Segundo  Numero:  <input type="text" name="numerodois" /><br />
	<pre width="80"> </pre>
    <input type="submit" name="submit" value="CALCULAR!" />
</form>
<pre width="80"> </pre>
</center>
	
<?php
//Criando uma Calculadora
$numeroum = $_POST['numeroum'];  //Quando o HTML submete o metodo post, a minha variavel recebe o numero um
$numerodois = $_REQUEST['numerodois']; //Quando o HTML submete o metodo post, a minha variavel recebe o numero dois

$adicao = $numeroum + $numerodois;
$subtracao = $numeroum - $numerodois;
$multiplicacao = $numeroum * $numerodois;
$divisao = $numeroum / $numerodois;
$potencia = pow($numeroum, $numerodois);

echo "<h5><th align=center width=200>RESULTADOS !!!</th></h5>";
echo "ADIÇÃO</br>";
echo$numeroum; echo" + "; echo$numerodois; echo" = "; echo$adicao;  
echo "</br>"; 
echo "</br>"; 
echo "SUBTRAÇÃO</br>";
echo$numeroum; echo" - "; echo$numerodois; echo" = "; echo$subtracao;  
echo "</br>"; 
echo "</br>"; 
echo "MULTIPLICAÇÃO</br>";
echo$numeroum; echo" X "; echo$numerodois; echo" = "; echo$multiplicacao;  
echo "</br>"; 
echo "</br>"; 
echo "DIVISÃO</br>";
echo$numeroum; echo" /  "; echo$numerodois; echo" = "; echo$divisao;  
echo "</br>"; 
echo "</br>"; 
echo "POTENCIA</br>";
echo$numeroum; echo" ELEVADO A (^) "; echo$numerodois; echo" = "; echo$potencia;  

echo "</br>";  
echo "</br>";  
echo "</br>";  

//Criando uma saudação para o usuario
echo "<h5><th align=center width=200>                                                           OLA, OBRIGADO POR UTILIZAR OS NOSSOS SERVIÇOS !!!</th></h5></br>";

?>

</body>

</html>