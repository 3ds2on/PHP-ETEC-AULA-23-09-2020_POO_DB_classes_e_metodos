<?php
//Criando as constantes com as credencias de acesso ao banco de dados
$servername = 'localhost'; $username = 'root'; $password = 'Julh@01'; $database = 'OKEX';

//Criar a conexão com banco de dados 
try {
	$connection = mysqli_connect($servername, $username, $password, $database);
    } catch (PDOException $e) {
      echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
                              }

//selecionando o banco de dados 
$db = mysqli_select_db($connection, "OKEX");

//Definindo o par para analise
$opcao = 'BTC-USDT';

//Teste do "if" com "while"
$contador = 0;
while ($contador <= 100000000) {

    if ($contador == 1000000)  {
       
      $sql = "SELECT id, best_ask, instrument_id, base_volume_24h FROM MOEDAS WHERE instrument_id = '$opcao'ORDER BY id desc LIMIT 2";
      $result = $connection->query($sql);
      $btcID = 0;
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
  
      if ($btcID == 0){
      $btcID = $row["id"]; 
      $id1 = $row["id"]; $valor1 = $row["best_ask"]; $moeda1 = $row["instrument_id"]; $volume1 = $row["base_volume_24h"];
      } else {
      $id2 = $row["id"]; $valor2 = $row["best_ask"]; $moeda2 = $row["instrument_id"]; $volume2 = $row["base_volume_24h"];
             }	  
                                           }
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
      
      //Cálculo do multiplicador para ponderação																					  $k = (10+1)/2;
      $r = $fechamentoMME0 - $fechamentoMME1;
      
      //Cálculo do multiplicador para ponderação
      $k = (10+1)/2;
     
      //Cálculo da Média móvel exponencial																				  
      $mme10 = ($r*$k) + $valor2;
      if ($mme10 < $valor1) {
      
      echo"Multiplicador para ponderação: ".$k." Média Movel Simples: ".$mms10." Média Movel Exponencial: ".$mme10." É UM BOM MOMENTO PARA COMPRA!!! "; 
      
      //Inserindos dados no banco de dados
      $dataparacompra = date("Y-m-d H:i:s");
      $sql = "INSERT INTO COMPRAR (id, moeda, preco, dataparacompra)
      VALUES ($id1, '$moeda1', $fechamentoMME0, '$dataparacompra')";
      if (mysqli_query($connection, $sql)) {
      echo "Recomendação de compra gravada com sucesso!";
      return true;
      } else {
      echo "Error na gravação de dados: " . "<br>" . mysqli_error($connection);
      echo $id;
      return;
      } 
      } else {
      echo "NÃO ENCONTRAMOS RECOMENDAÇÃO DE COMPRA! ";
      }
      }
      if ($contador == 20000000) {

          }
      if ($contador == 30000000) {

          }
      if ($contador == 40000000) {

          }
      if ($contador == 50000000) {

          }
      if ($contador == 60000000) {

          }
      if ($contador == 70000000) {

          }
      if ($contador == 80000000) {

          }
      if ($contador == 90000000) {
 
          }
      if ($contador == 10000000) { 

          }
      }
      else 
      {
      echo "O SELECT NÃO OBTEVE RESULTADO!";
      }
      }
      $contador++;
      }
      //Fechando a conexão com o banco de dados
      mysqli_close($connection);
?>