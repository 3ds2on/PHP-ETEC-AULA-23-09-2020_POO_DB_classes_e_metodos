<?php
// requisição da classe PHPlot
include_once("/var/www/html/EspacoVip/phplot/phplot.php");
  
//Container (Estabelecendo conexão com o banco de dados) -->
//Criando as constantes com as credencias de acesso ao banco de dados
$servername = '31.170.166.124'; $username = 'u853940274_vip'; $password = 'Vip@89742583'; $database = 'u853940274_espacovip';

//Criar a conexão com banco de dados 
try {
$conn = mysqli_connect($servername, $username, $password, $database);
} catch (PDOException $e) {
echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
                          }
					  
//inserindo no banco de dados 
$db = mysqli_select_db($conn, "u853940274_espacovip");   
		  
//SALDO no mes 01/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-01-01' and '2020-01-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas01 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-01-01' and '2020-01-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra01 = $data[0];} 
$saldo01  = $vendas01 - $compra01;

//SALDO no mes 02/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-02-01' and '2020-02-29';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas02 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-02-01' and '2020-02-29';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra02 = $data[0];} 
$saldo02  = $vendas02 - $compra02;

//SALDO no mes 03/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-03-01' and '2020-03-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas03 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-03-01' and '2020-03-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra03 = $data[0];} 
$saldo03  = $vendas03 - $compra03;

//SALDO no mes 04/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-04-01' and '2020-04-30';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas04 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-04-01' and '2020-04-30';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra04 = $data[0];} 
$saldo04  = $vendas04 - $compra04;

//SALDO no mes 05/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-05-01' and '2020-05-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas05 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-05-01' and '2020-05-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra05 = $data[0];} 
$saldo05 = $vendas05 - $compra05;

//SALDO no mes 06/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-06-01' and '2020-06-30';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas06 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-06-01' and '2020-06-30';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra06 = $data[0];} 
$saldo06  = $vendas06 - $compra06;

//SALDO no mes 07/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-07-01' and '2020-07-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas07 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-07-01' and '2020-07-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra07 = $data[0];} 
$saldo07  = $vendas07 - $compra07;

//SALDO no mes 08/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-08-01' and '2020-08-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas08 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-08-01' and '2020-08-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra08 = $data[0];} 
$saldo08  = $vendas08 - $compra08;

//SALDO no mes 09/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-09-01' and '2020-09-30';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas09 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-09-01' and '2020-09-30';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra09 = $data[0];} 
$saldo09  = $vendas09 - $compra09;

//SALDO no mes 10/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-10-01' and '2020-10-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas10 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-10-01' and '2020-10-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra10 = $data[0];} 
$saldo10  = $vendas10 - $compra10;

//SALDO no mes 11/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-11-01' and '2020-11-30';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas11 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-11-01' and '2020-11-30';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra11 = $data[0];} 
$saldo11  = $vendas11 - $compra11;

//SALDO no mes 12/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-12-01' and '2020-12-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas12 = $data[0];} 
$sql = "SELECT sum(preco) FROM COMPRA WHERE data_compra between '2020-12-01' and '2020-12-31';"; $result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$compra12 = $data[0];} 
$saldo12 = $vendas12 - $compra12;

  
// Array com dados de Ano x Índice de fecundidade Brasileira 1940-2000
// Valores por década
$data = array(
             array('Janeiro' , $saldo01), 
             array('Fevereiro' , $saldo02),
             array('Marco' , $saldo03),
			 array('Abril' , $saldo04),
             array('Maio' , $saldo05),
             array('Junho' , $saldo06),
             array('Julho' , $saldo07),
             array('Agosto' , $saldo08),
             array('Setembro' , $saldo09),
             array('Outubro' , $saldo10),
             array('Novembro' , $saldo11),
             array('Dezembro' , $saldo12)
             );     
# Cria um novo objeto do tipo PHPlot com 500px de largura x 350px de altura                 
$plot = new PHPlot(900 , 170);     
  
// Organiza Gráfico -----------------------------
$plot->SetTitle('SALDO');
# Precisão de uma casa decimal
$plot->SetPrecisionY(1);
# tipo de Gráfico em barras (poderia ser linepoints por exemplo)
$plot->SetPlotType("bars");
# Tipo de dados que preencherão o Gráfico text(label dos anos) e data (valores de porcentagem)
$plot->SetDataType("text-data");
# Adiciona ao gráfico os valores do array
$plot->SetDataValues($data);
// -----------------------------------------------
  
// Organiza eixo X ------------------------------
# Seta os traços (grid) do eixo X para invisível
$plot->SetXTickPos('none');
# Texto abaixo do eixo X
$plot->SetXLabel("Total de saldo em cada mes");
# Tamanho da fonte que varia de 1-5
$plot->SetXLabelFontSize(2);
$plot->SetAxisFontSize(2);
// -----------------------------------------------
  
// Organiza eixo Y -------------------------------
# Coloca nos pontos os valores de Y
$plot->SetYDataLabelPos('plotin');
// -----------------------------------------------
  
// Desenha o Gráfico -----------------------------
$plot->DrawGraph();
// -----------------------------------------------
?>
