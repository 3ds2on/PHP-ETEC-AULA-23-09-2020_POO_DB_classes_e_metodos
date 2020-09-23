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
		  
//Vendas no mes 01/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-01-01' and '2020-01-31';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas01 = $data[0];} 
//Vendas no mes 02/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-02-01' and '2020-02-29';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas02 = $data[0];} 
//Vendas no mes 03/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-03-01' and '2020-03-31';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas03 = $data[0];} 
//Vendas no mes 04/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-04-01' and '2020-04-30';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas04 = $data[0];} 
//Vendas no mes 05/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-05-01' and '2020-05-31';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas05 = $data[0];} 
//Vendas no mes 06/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-06-01' and '2020-06-30';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas06 = $data[0];} 
//Vendas no mes 07/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-07-01' and '2020-07-31';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas07 = $data[0];} 
//Vendas no mes 08/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-08-01' and '2020-08-31';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas08 = $data[0];} 
//Vendas no mes 09/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-09-01' and '2020-09-30';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas09 = $data[0];} 
//Vendas no mes 10/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-10-01' and '2020-10-31';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas10 = $data[0];} 
//Vendas no mes 11/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-11-01' and '2020-11-30';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas11 = $data[0];} 
//Vendas no mes 12/2020	
$sql = "SELECT sum(preco) FROM VENDAS WHERE data_venda between '2020-12-01' and '2020-12-31';";
$result = mysqli_query($conn,$sql);while($data = mysqli_fetch_array($result)){$vendas12 = $data[0];} 

  
// Array com dados de Ano x Índice de fecundidade Brasileira 1940-2000
// Valores por década
$data = array(
             array('Janeiro' , $vendas01), 
             array('Fevereiro' , $vendas02),
             array('Marco' , $vendas03),
     	     array('Abril' , $vendas04),
             array('Maio' , $vendas05),
             array('Junho' , $vendas06),
             array('Julho' , $vendas07),
             array('Agosto' , $vendas08),
             array('Setembro' , $vendas09),
             array('Outubro' , $vendas10),
             array('Novembro' , $vendas11),
             array('Dezembro' , $vendas12)
             );     
# Cria um novo objeto do tipo PHPlot com 500px de largura x 350px de altura                 
$plot = new PHPlot(900 , 170);     
  
// Organiza Gráfico -----------------------------
$plot->SetTitle('ENTRADAS');
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
$plot->SetXLabel("Total de entradas em cada mes");
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
