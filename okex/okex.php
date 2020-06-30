<!DOCTYPE <html>
<html lang="pt-br">
<meta charset="utf-8"/>
<body bgcolor="#b3e3d4">

<head>
    <title>TRADER OKEX</title>          
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/funcoes.js"></script>
    <link rel="stylesheet" type="text/css"  href="estilo.css"/>         
</head>

<center>

<pre width="80"> </pre>
<pre width="80"> </pre>

<h4><FONT COLOR="#2d2db5"><b>POR GENTILEZA, INFORME UMA MOEDA PARA NEGOCIAÇÃO.</b></FONT></h4>

<pre width="80"> </pre>

<center>

<form method="post"> 
     <select name="opcao"id="opcao">
     <option value="A">--Escolha uma moeda--</option>      
     <option value="BTC-USDT">Bitcoin</option>
     <option value="ETH-USDT">Ethereum</option>
     <option value="XRP-USDT">Ripple</option>
     <option value="BCH-USDT">BitcoinCash</option>
     <option value="BSV-USDT">BitcoinCashSV</option>
     <option value="LTC-USDT">Litecoin</option>
     <option value="ADA-USDT">ADA</option>
     <option value="EOS-USDT">EnterpriseOperationSystem</option>
     <option value="XTZ-USDT">XTZ</option>
     <option value="LINK-USDT">LINK</option>
     <option value="OKB-USDT">OKB</option>
     <option value="XLM-USDT">XLM</option>
     <option value="XMR-USDT">XMR</option>
     <option value="TRX-USDT">TRX</option>
     <option value="CRO-USDT">CRO</option>
     <option value="NEO-USDT">NEO</option>
     <option value="ETC-USDT">ETC</option>
     <option value="DASH-USDT">DASH</option>
     <option value="ATOM-USDT">ATOM</option>
     <option value="ZEC-USDT">ZEC</option>
     <option value="MKR-USDT">Maker</option>
     <option value="ONT-USDT">Ontology</option>
     <option value="BAT-USDT">BAT</option>
     <option value="XEM-USDT">XEM</option>
     <option value="DGB-USDT">DGB</option>
     <option value="ZRX-USDT">ZRX</option>
     <option value="OMG-USDT">OMG</option>
     <option value="KNC-USDT">KNC</option>
     <option value="THETA-USDT">ThetaNetwork</option>
     <option value="QTUM-USDT">Qtum</option>
     <option value="ZIL-USDT">ZIL</option>
     <option value="ICX-USDT">ICX</option>
     <option value="BTG-USDT">BTG</option>
     <option value="WAVES-USDT">Waves</option>
     <option value="LRC-USDT">LRC</option>
     <option value="IOST-USDT">IOST</option>
     <option value="BTM-USDT">BYTOM</option>
     <option value="XUC-USDT">XUC</option>
     <option value="HC-USDT">HyperCash</option>
     <option value="ELF-USDT">ELF</option>
     <option value="CVT-USDT">CyberVein</option>
     <option value="NULS-USDT">NULS</option>
     <option value="BEC-USDT">BEC</option>
     <option value="USDK-USDT">USDK</option>
     <option value="NAS-USDT">Nebulas</option>
     <option value="CTXC-USDT">CTXC</option>
     <option value="TRUE-USDT">TRUE</option>
     <option value="YOU-USDT">YOU</option>
     <option value="DEP-USDT">DEP</option>
     <option value="CMT-USDT">CyberMiles</option>
     <option value="VITE-USDT">Vite</option>
     <option value="HYC-USDT">HYCON</option>
     <option value="MOF-USDT">MolecularFuture</option>
     <option value="ACT-USDT">ACT</option>
     <option value="GTO-USDT">Gifto</option>
     <option value="MDT-USDT">MDT</option>
     <option value="EM-USDT">Eminer</option>
     <option value="SWFTC-USDT">SwftCoin</option>
     <option value="KCASH-USDT">KCASH</option>
     <option value="RNT-USDT">ONEROOT</option>
     <option value="TCT-USDT">TCT</option>
     <option value="SOC-USDT">AllSportsCoin</option>
     <option value="EGT-USDT">Egretia</option>
     <option value="YOYO-USDT">YOYOW</option>
     <option value="LET-USDT">LinkEye</option>
     <option value="INT-USDT">InternetNodeToken</option>
     <option value="GNX-USDT">GNX</option>
     <option value="QUN-USDT">QUN</option>
     <option value="ROAD-USDT">ROAD</option>
     <option value="YEE-USDT">YEE</option>
     <option value="TOPC-USDT">TopChain</option>
     <option value="CHAT-USDT">ChatCoin</option>
     <option value="TRIO-USDT">TRIO</option>
     <option value="ZIP-USDT">ZIPPER</option>
     <option value="PST-USDT">PrimasToken</option>
     <option value="FAIR-USDT">FAIR</option>
     <option value="ORS-USDT">originsport</option>
     <option value="AAC-USDT">AcuteAngleCoin</option>
     <option value="ETM-USDT">En-Tan-Mo</option>
    </select> 
    <input type="submit" name="submit" value="CONFIRMAR" id="btnMoeda" />
</form>

</center>
	
<?php
// Recebendo a moeda escolhida pelo SELECT, via POST
$opcao = $_POST['opcao'];

// salvando a URL do da Braziliex
$url = "https://www.okex.com/api/spot/v3/instruments/$opcao/ticker";

$ch = curl_init($url); // Iniciando o CURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Parametro do CURL
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Parametro do CURL

// Pasando o CURL para o JSON
$moeda = json_decode(curl_exec($ch));  

//Colocando o conteúdo do objeto JSON em variaveis PHP 
$instrument_id = $moeda->instrument_id; 
$product_id = $moeda->product_id; 
$timestamp = date("Y-m-d H:i:s");
$timestamp = $timestamp;
$best_ask = $moeda->best_ask; 
$best_bid = $moeda->best_bid; 
$last = $moeda->last; 
$last_qty = $moeda->last_qty; 
$ask = $moeda->ask; 
$best_ask_size = $moeda->best_ask_size;  
$bid = $moeda->bid;  
$best_bid_size = $moeda->best_bid_size;  
$open_24h = $moeda->open_24h;  
$high_24h = $moeda->high_24h;  
$low_24h = $moeda->low_24h;   
$base_volume_24h = $moeda->base_volume_24h;  
$quote_volume_24h = $moeda->quote_volume_24h ;


//Ajustando o tipo de dado para cada variavel
$best_ask = floatval ($best_ask); $best_ask = number_format($best_ask, 8, '.', '');
$best_bid = floatval ($best_bid); $best_bid = number_format($best_bid, 8, '.', '');
$last = floatval ($last); $last = number_format($last, 8, '.', '');
$last_qty = floatval ($last_qty); $last_qty = number_format($last_qty, 8, '.', '');
$ask = floatval ($ask); $ask = number_format($ask, 8, '.', '');
$best_ask_size = floatval ($best_ask_size); $best_ask_size = number_format($best_ask_size, 8, '.', '');
$bid = floatval ($bid); $bid = number_format($bid, 8, '.', '');
$best_bid_size = floatval ($best_bid_size); $best_bid_size = number_format($best_bid_size, 8, '.', '');
$open_24h = floatval ($open_24h); $open_24h = number_format($open_24h, 8, '.', '');
$high_24h = floatval ($high_24h); $high_24h = number_format($high_24h, 8, '.', '');
$low_24h = floatval ($low_24h); $low_24h = number_format($low_24h, 8, '.', '');
$base_volume_24h = floatval ($base_volume_24h); $base_volume_24h = number_format($base_volume_24h, 8, '.', '');
$quote_volume_24h = floatval ($quote_volume_24h); $quote_volume_24h = number_format($quote_volume_24h, 8, '.', '');


//Imprimindo as variaveis PHP
echo "<pre>";
echo "instrument_id "; print_r($instrument_id);
echo "<pre>";
echo "product_id "; print_r($product_id);
echo "<pre>";
echo "timestamp "; print_r($timestamp);
echo "<pre>";
echo "best_ask "; print_r($best_ask);
echo "<pre>";
echo "best_bid "; print_r($best_bid);
echo "<pre>";
echo "last "; print_r($last);
echo "<pre>";
echo "last_qty "; print_r($last_qty);
echo "<pre>";
echo "ask "; print_r($ask);
echo "<pre>";
echo "best_ask_size "; print_r($best_ask_size);
echo "<pre>";
echo "bid "; print_r($bid);
echo "<pre>";
echo "best_bid_size "; print_r($best_bid_size);
echo "<pre>";
echo "open_24h "; print_r($open_24h);
echo "<pre>";
echo "high_24h "; print_r($high_24h);
echo "<pre>";
echo "low_24h "; print_r($low_24h);
echo "<pre>";
echo "base_volume_24h "; print_r($base_volume_24h);
echo "<pre>";
echo "quote_volume_24h "; print_r($quote_volume_24h);
echo "<pre>";

//Criando as constantes com as credencias de acesso ao banco de dados
$servername = 'localhost';
$username = 'root';
$password = 'Julh@01';
$database = 'OKEX';

//Criar a conexão com banco de dados 
try {
	$connection = mysqli_connect($servername, $username, $password, $database);

    echo "Conexão com banco de dados realizada com sucesso.";
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
}

    echo '<pre width="80"> </pre>'; 

//selecionando o banco de dados 
$db = mysqli_select_db($connection, "OKEX");

//criando a query de consulta à tabela criada 
$sql = mysqli_query($connection, "SELECT MAX(id) FROM MOEDAS") or die( 
  mysqli_error($connection) //caso haja um erro na consulta 
);

//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 

//Mostrando o maior ID encontrado
echo "O maior ID encontrado foi " . $aux["MAX(id)"]; 

//Inserindo um novo ID valido com base no ultimo inserido
$id = $aux["MAX(id)"] + 1; 
}







echo '<pre width="80"> </pre>'; 
//Calculando viabilidade para compra
$sql = "SELECT id, best_ask, instrument_id, base_volume_24h FROM MOEDAS WHERE instrument_id = '$opcao'ORDER BY id desc LIMIT 2";
$result = $connection->query($sql);
$btcID = 0;
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  
      if ($btcID == 0){
      $btcID = $row["id"]; 
      $id1 = $row["id"]; $valor1 = $row["best_ask"]; $moeda1 = $row["instrument_id"]; $volume1 = $row["base_volume_24h"];
      echo "ID DA LINHA-1: " . $id1. " - MOEDA DA LINHA-1 " . $moeda1. " - VALOR DA LINHA-1 " . $valor1.  " - VOLUME DA LINHA-1 " . $volume1."<br>";
                      } else {
      $id2 = $row["id"]; $valor2 = $row["best_ask"]; $moeda2 = $row["instrument_id"]; $volume2 = $row["base_volume_24h"];
      echo "ID DA LINHA-2: " . $id2. " - MOEDA DA LINHA-2 " . $moeda2. " - VALOR DA LINHA-2 " . $valor2.  " - VOLUME DA LINHA-2 " . $volume2."<br>";
	  
	  
	                         if ($valor1 > $valor2 && $volume1 > $volume2) { 
																			 $sql = "SELECT id, best_ask FROM MOEDAS WHERE instrument_id = '$opcao'ORDER BY id desc LIMIT 10";
																			 $result = $connection->query($sql);
																			 $fechamento0=0; $fechamento1=0; $fechamento2=0; $fechamento3=0; $fechamento4=0; $fechamento5=0; $fechamento6=0; $fechamento7=0; $fechamento8=0; $fechamento9=0; 
																			 if ($result->num_rows > 0) {
																			 while($row = $result->fetch_assoc()) {
																				 if ($fechamento0 == 0){$fechamentoMME0 = $row["best_ask"]; $fechamento0 = $row["best_ask"];}
																				 if ($fechamento1 == 0){$fechamentoMME1 = $row["best_ask"]; $fechamento1 = $row["best_ask"];}
																				 if ($fechamento2 == 0){$fechamento2 = $row["best_ask"];}
																				 if ($fechamento3 == 0){$fechamento3 = $row["best_ask"];}
																				 if ($fechamento4 == 0){$fechamento4 = $row["best_ask"];}
																				 if ($fechamento5 == 0){$fechamento5 = $row["best_ask"];}
																				 if ($fechamento6 == 0){$fechamento6 = $row["best_ask"];}
																				 if ($fechamento7 == 0){$fechamento7 = $row["best_ask"];}
																				 if ($fechamento8 == 0){$fechamento8 = $row["best_ask"];}
																			     if ($fechamento9 == 0){$fechamento9 = $row["best_ask"];}
																				                                   }
																												   }
																					  //Calculo da Média Móvel Simples
																				      $mms10 =($fechamento0 + $fechamento1 + $fechamento2 + $fechamento3 + $fechamento4 + $fechamento5 + $fechamento6 + $fechamento7 + $fechamento8 + $fechamento9)/10;
																					  
																					  //Cálculo do multiplicador para ponderação
																					  $k = (10+1)/2;
																					  
																					  $r = $fechamentoMME0 - $fechamentoMME1;
																					  								
																					  //Cálculo da Média móvel exponencial																				  
																					  $mme10 = ($r*$k) + $valor2;
                                                                                                                                                                          
                                                                                                                                                                          if ($mme10 < $valor10) {
                                                                                                                                                                          
                                                                                                                                                                          echo '<pre width="80"> </pre>'; 
																					  echo"Multiplicador para ponderação: ".$k; 
																				          echo '<pre width="80"> </pre>'; 
																			                  echo"Média Movel Simples: ".$mms10; 
																					  echo '<pre width="80"> </pre>'; 
																				          echo"Média Movel Exponencial: ".$mme10; 
																				          echo '<pre width="80"> </pre>'; 
																					  echo "É UM BOM MOMENTO PARA COMPRA!!!"; 
																					  echo '<pre width="80"> </pre>'; 
                                                                                                                                                                          
                                                                                                                                                                          
                                                                                                                                                                          //Inserindos dados no banco de dados
                                                                                                                                                                          $sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
                                                                                                                                                                          VALUES ($id1, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
                                                                                                                                                                          if (mysqli_query($connection, $sql)) {
                                                                                                                                                                          echo "Dados referentes ao ".$id. " Recomendação de compra gravada com sucesso!";
                                                                                                                                                                          return true;
                                                                                                                                                                          } else {
                                                                                                                                                                          echo "Error na gravação de dados: " . "<br>" . mysqli_error($connection);
                                                                                                                                                                          echo $id;
                                                                                                                                                                          return;
                                                                                                                                                                          } 
                                                                                                                                                                          
                                                                                                                                                                                                      } 
                                                                                                                                                                          
                                                                                                                                                                          
                                                                                                                                                                          
          																	}			
																			else {
																				  echo '<pre width="80"> </pre>'; 
																				  echo "NÃO É UM BOM MOMENTO PARA COMPRA!!!";
																				  echo '<pre width="80"> </pre>'; 
																				  }
					         }   
                                       }
                             } else {echo "SELECT SEM RESULTADOS!";}

echo '<pre width="80"> </pre>'; 

//Inserindos dados no banco de dados
$sql = "INSERT INTO MOEDAS (id, best_ask, best_bid, instrument_id, product_id, last, last_qty, ask, best_ask_size, bid, best_bid_size, open_24h, high_24h, low_24h, base_volume_24h, quote_volume_24h, timestamp)
		VALUES ($id, $best_ask, $best_bid, '$instrument_id', '$product_id', $last, $last_qty, $ask, $best_ask_size, $bid, $best_bid_size, $open_24h, $high_24h, $low_24h, $base_volume_24h, $quote_volume_24h, '$timestamp')";
if (mysqli_query($connection, $sql)) {
    echo "Dados referentes ao ".$id. " foram inseridos com sucesso!";
	return true;
} else {
       echo "Error na gravação de dados: " . "<br>" . mysqli_error($connection);
	   echo $id;
	   return;
       } 

//Fechando a conexão com o banco de dados
mysqli_close($connection);
?>

</body>
</html>