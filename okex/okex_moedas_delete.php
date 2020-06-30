<?php
//Pulando uma linha no log
echo "  ";

//Pegando a data e hora atual para o log
$datahoraatual = date("Y-m-d H:i:s");

//Criando as constantes com as credencias de acesso ao banco de dados
$servername = 'localhost';
$username = 'root';
$password = 'Julh@01';
$database = 'OKEX';

//Criar a conexão com banco de dados 
try {
	$connection = mysqli_connect($servername, $username, $password, $database);

    echo $datahoraatual." - CONECTADO AO BANCO DE DADOS - ";
} catch (PDOException $e) {
    echo $datahoraatual." - ERRO NA CONEXÂO DO BANCO DE DADOS - " . $e->getMessage();
}

//selecionando o banco de dados 
$db = mysqli_select_db($connection, "OKEX");

//Pegando o dia atual como referencia
$dia = date("d");

//Chamando o dia anterior para DELETE
$dia = $dia - 1;

//Montando a data do dia anterior para DELETE
$datahora = date("Y-m-$dia 23:59:59");

//criando a query para DELETE
$sql = "delete from MOEDAS where timestamp <= '$datahora'";

//Rodando o DELETE
if ($connection->query($sql) === TRUE) {
  echo $datahoraatual." - DELETE CONCLUIDO COM SUCESSO! ";
} else {
  echo $datahoraatual." - ERRO NO DELETE: " . $connection->error;
}

//Fechando a conexão com o banco de dados
mysqli_close($connection);
?>