/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Atividades
 * Please, open index.php
 * @author edson
 */
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Espaço VIP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/funcoes.js"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>		
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>

<!-- Container (Interação com o Stile CSS) -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- Container (Estabelecendo conexão com o banco de dados) -->
<?php
          //Criando as constantes com as credencias de acesso ao banco de dados
          $servername = '**************'; $username = '**************'; $password = '************'; $database = '********************';
          
          //Criar a conexão com banco de dados 
          try {
          $conn = mysqli_connect($servername, $username, $password, $database);
          } catch (PDOException $e) {
          echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
                                    }
          					  
          //inserindo no banco de dados 
          $db = mysqli_select_db($conn, "********************");   
?>

<!-- Container (Barra superior) -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#vender">VENDER</a></li>
        <li><a href="#comprar">COMPRAR</a></li>
        <li><a href="#cadastrar">CADASTRAR</a></li>
		<li><a href="#deletar">DELETAR</a></li>
		<li><a href="#estoque">ESTOQUE</a></li>
        <li><a href="#relatorios">RELATORIOS</a></li>
        <li><a href="#contatos">CONTATOS</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Container (Descrição superior da pagina) -->
<div class="jumbotron text-center">
  <h1>ESPAÇO VIP</h1> 
  <p>Controle financeiro e estoque</p> 
</div>
			
<!-- Container (vender Section) -->
<div id="vender" class="container-fluid">
	<div class="col-sm-7 slideanim">
	    <div class="col-sm-8">
		
		   <!-- Formulario para vender) -->	
		   <blockquote>	
			 <form method="post">
			<h2><FONT COLOR="#FF4000"><b>VENDER PRODUTOS OU SERVIÇOS</b></FONT></h2>
			<label>Setor:</label>
			<select name="id_categoria_v" id="id_categoria_v">
				<option value="">Informe o Setor</option>
				<?php
				$result_cat_post = "SELECT nome , id FROM SETORES ORDER BY nome";
				$resultado_cat_post = mysqli_query($conn, $result_cat_post);
				while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
				echo '<option value="'.$row_cat_post['id'].'">'.$row_cat_post['nome'].'</option>';
				}
				?>
			</select><br><br>
						
			<label>Informe o produto:</label>
			<span class="carregando"></span>
			<select name="id_sub_categoria_v" id="id_sub_categoria_v">
				<option value="">Escolha o produto</option>
			</select><br><br>
			
			<label>Quantidade da compra:</label><input type="number" name="vendaQuantidade" id="vendaQuantidade"> <br><br>
						
			<input type="submit" id="btnVenderProduto" value="Vender Produto">

			</form>
		  </blockquote>	

          <?php
          //RECEBENDO DADOS PARA VENDER DO HTML
		  $id_categoria_v = $_POST['id_categoria_v'];
		  $id_sub_categoria_v = $_POST['id_sub_categoria_v'];
		  $vendaQuantidade = $_POST['vendaQuantidade'];
		  
		  //Atualizando dados na base de dados
		  if($id_categoria_v >= 1 && $id_sub_categoria_v >= 1)
		  {

		  //Buscando o preço do cadastro		
		  $sqll = "SELECT preco FROM CADASTRO where setor = $id_categoria_v and id = $id_sub_categoria_v;";
		  $result = mysqli_query($conn,$sqll);
		  while($data = mysqli_fetch_array($result)){
		  $vendaPreco = $data[0];
		  }
		            
		  $vendaPreco = $vendaPreco * $vendaQuantidade;		
					
		  //Inserindo a venda
          $queryy = "INSERT INTO VENDAS (setor,id,preco,quantidade) VALUES ('$id_categoria_v','$id_sub_categoria_v','$vendaPreco','$vendaQuantidade')";
		  if ($conn->query($queryy)) {
		  echo "Venda realizada com sucesso !!! ";
		  }else{
		  echo $conn->error;
	      }
		  
		  //Buscando a quantidade no cadastro		
		  $sqll = "SELECT quantidade FROM CADASTRO where setor = $id_categoria_v and id = $id_sub_categoria_v;";
		  $result = mysqli_query($conn,$sqll);
		  while($data = mysqli_fetch_array($result)){
		  $quantidade = $data[0];
		  }
		  
		  $newQuantidade = $quantidade - $vendaQuantidade;
		  
		  //Atualizando a quantidade no estoque
		  $sqll = "UPDATE CADASTRO SET quantidade = $newQuantidade where setor = $id_categoria_v and id = $id_sub_categoria_v";
		  if ($conn->query($sqll) === TRUE) {
		  echo " Cadastro atualizado !!!";
		  } else {
		  echo "Error updating record: " . $conn->error;
		         }
		  } 
          ?> 
		</div>	
    </div>
</div>

<footer class="container-fluid text-center"><a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a></footer>
<center><img src='images\barra.png'> </a></center>

<!-- Container (comprar Section) -->
<div id="comprar" class="container-fluid">
	<div class="col-sm-7 slideanim">
	    <div class="col-sm-8">
		
		   <!-- Formulario para comprar) -->	
		  <blockquote>
			 <form method="post">
			<h2><FONT COLOR="#FF4000"><b>COMPRA DE PRODUTOS</b></FONT></h2>
			<label>Setor:</label>
			<select name="id_categoria_c" id="id_categoria_c">
				<option value="">Informe o Setor</option>
				<?php
				$result_cat_post = "SELECT nome , id FROM SETORES ORDER BY nome";
				$resultado_cat_post = mysqli_query($conn, $result_cat_post);
				while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
				echo '<option value="'.$row_cat_post['id'].'">'.$row_cat_post['nome'].'</option>';
				}
				?>
			</select><br><br>
						
			<label>Informe o produto:</label>
			<span class="carregando"></span>
			<select name="id_sub_categoria_c" id="id_sub_categoria_c">
				<option value="">Escolha o produto</option>
			</select><br><br>
			
			<label>Quantidade da compra:</label><input type="number" name="compraQuantidade" id="compraQuantidade"> <br><br>
						
			<input type="submit" id="btnComprarProduto" value="Comprar Produto">

			</form>
		  </blockquote>	

          <?php
          //RECEBENDO DADOS PARA COMPRAR DO HTML
		  $id_categoria_c = $_POST['id_categoria_c'];
		  $id_sub_categoria_c = $_POST['id_sub_categoria_c'];
		  $compraQuantidade = $_POST['compraQuantidade'];
		  		
          //Atualizando dados na base de dados
		  if($id_categoria_c >= 1 && $id_sub_categoria_c >= 1)
		  {
			
		  //Buscando o preço do cadastro		
		  $sql = "SELECT preco FROM CADASTRO where setor = $id_categoria_c and id = $id_sub_categoria_c;";
		  $result = mysqli_query($conn,$sql);
		  while($data = mysqli_fetch_array($result)){
		  $compraPreco = $data[0];
		  }
		            
		  //Inserindo a compra
          $query = "INSERT INTO COMPRA (setor,id,preco,quantidade) VALUES ('$id_categoria_c','$id_sub_categoria_c','$compraPreco','$compraQuantidade')";
		  if ($conn->query($query)) {
		  echo "Compra realizada com sucesso !!! ";
		  }else{
		  echo $conn->error;
	      }
		  
		  //Buscando a quantidade no cadastro		
		  $sql = "SELECT quantidade FROM CADASTRO where setor = $id_categoria_c and id = $id_sub_categoria_c;";
		  $result = mysqli_query($conn,$sql);
		  while($data = mysqli_fetch_array($result)){
		  $quantidade = $data[0];
		  }
		  
		  $newQuantidade = $quantidade + $compraQuantidade;
		  
		  //Atualizando a quantidade no estoque
		  $sql = "UPDATE CADASTRO SET quantidade = $newQuantidade where setor = $id_categoria_c and id = $id_sub_categoria_c";
		  if ($conn->query($sql) === TRUE) {
		  echo " Cadastro atualizado !!!";
		  } else {
		  echo "Error updating record: " . $conn->error;
		         }
		  }
          ?>
		</div>	
    </div>
</div>

<footer class="container-fluid text-center"><a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a></footer>
<center><img src='images\barra.png'> </a></center>
 
 <!-- Container (cadastrar Section) -->
  <div id="cadastrar" class="container-fluid"> 
	 <div class="col-sm-7 slideanim">
        <div class="col-sm-8"> 

		   <!-- Formulario para cadastro) -->	
		  <blockquote>
			 <form method="post">
			<h2><FONT COLOR="#FF4000"><b>CADASTRE PRODUTO E SERVIÇO</b></FONT></h2>
			<br>DESCRIÇÂO </br><input name="cadDescricao" type="text" size="50" id="cadDescricao"/>
			<br>QUANTIDADE </br><input name="cadQuantidade" type="text" id="cadQuantidade" size="50" maxlength="9999"/>
			<br>PREÇO </br><input name="cadPreco" type="text" id="cadPreco" size="50" maxlength="9999"/>
			<br>SETOR <br><select name="cadSetor"  id="cadSetor">
			<option value="2">CAPILAR</option><option value="4">MAQUIAGEM</option><option value="3">ESTETICA</option><option value="1">MANICURE</option>
			  			  </select> 
			<p><br> <input type="submit" name="btnCadastro" id="btnCadastro" value="GRAVAR"/> <br>
			</form>
		  </blockquote>	

          <?php
          //RECEBENDO DADOS PARA CADASTRO DO HTML
          $cadDescricao = $_POST['cadDescricao'];
          $cadQuantidade = $_POST['cadQuantidade'];
          $cadPreco = $_POST['cadPreco'];
          $cadSetor = $_POST['cadSetor'];
		
		  if ($cadQuantidade >= 1 && $cadPreco >= 1)
		  {
          $query = "INSERT INTO CADASTRO (DESCRICAO,QUANTIDADE,PRECO,SETOR)VALUES ('$cadDescricao',$cadQuantidade,$cadPreco,'$cadSetor');";
		  
		  if ($conn->query($query)) {
		  echo "Cadastro realizado com sucesso!";
		  }else{
		  echo $conn->error;
	      }
		  }
          ?>
		  
		</div>	
    </div>
</div>

<footer class="container-fluid text-center"><a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a></footer>
<center><img src='images\barra.png'> </a></center>
  
  
 <!-- Container (deletar Section) -->
  <div id="deletar" class="container-fluid"> 
	 <div class="col-sm-7 slideanim">
        <div class="col-sm-8"> 
		  
		  <!-- Formulario para deletar o cadastro) -->	
		  <blockquote>
			<form method="post">
			<h2><FONT COLOR="#FF4000"><b>REMOVA PRODUTO OU SERVIÇO</b></FONT></h2>

			<label>Setor:</label>
			<select name="id_categoria_d" id="id_categoria_d">
				<option value="">Informe o Setor</option>
				<?php
				$result_cat_post = "SELECT nome , id FROM SETORES ORDER BY nome";
				$resultado_cat_post = mysqli_query($conn, $result_cat_post);
				while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
				echo '<option value="'.$row_cat_post['id'].'">'.$row_cat_post['nome'].'</option>';
				}
				?>
			</select><br><br>
						
			<label>Informe Produto ou Serviço:</label>
			<span class="carregando"></span>
			<select name="id_sub_categoria_d" id="id_sub_categoria_d">
				<option value="">Escolha Produto ou Serviço</option>
			</select><br><br>
			
			<input type="submit" id="btnDeleteCadastro" value="Delete Produto">

			</form>
		  </blockquote>	

          <?php
          //RECEBENDO DADOS PARA CADASTRO DO HTML
		  $id_categoria_d = $_POST['id_categoria_d'];
		  $id_sub_categoria_d = $_POST['id_sub_categoria_d'];
		
          //Atualizando dados na base de dados
		  if($id_categoria_d >= 1 && $id_sub_categoria_d >= 1)
		  {
		  $sql = "DELETE FROM CADASTRO WHERE setor = $id_categoria_d and id = $id_sub_categoria_d";
		  if ($conn->query($sql) === TRUE) {
		  echo "Produto ou serviço deletado com sucesso";
		  } else {
		  echo "Error updating record: " . $conn->error;
		       }
		  }
          ?>
		  
		</div>	
    </div>
</div>

<footer class="container-fluid text-center"><a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a></footer>
<center><img src='images\barra.png'> </a></center>
  
  
  <!-- Container (estoque Section) -->
  <div id="estoque" class="container-fluid"> 
	 <div class="col-sm-7 slideanim">
        <div class="col-sm-8"> 
		  
		  <!-- Formulario para atualizar o estoque) -->	
		  <blockquote>
			<form method="post">
			<h2><FONT COLOR="#FF4000"><b>ATUALIZE PREÇO E ESTOQUE</b></FONT></h2>

			<label>Setor:</label>
			<select name="id_categoria" id="id_categoria">
				<option value="">Informe o Setor</option>
				<?php
				$result_cat_post = "SELECT nome , id FROM SETORES ORDER BY nome";
				$resultado_cat_post = mysqli_query($conn, $result_cat_post);
				while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
				echo '<option value="'.$row_cat_post['id'].'">'.$row_cat_post['nome'].'</option>';
				}
				?>
			</select><br><br>
						
			<label>Informe Produto ou Serviço:</label>
			<span class="carregando"></span>
			<select name="id_sub_categoria" id="id_sub_categoria">
				<option value="">Escolha Produto ou Serviço</option>
			</select><br><br>
			
			<label>Nova Quantidade:</label><input type="text" name="newQuantidade" id="newQuantidade"> <br><br>
			<label>Novo  Preço:</label><input type="text" name="newPreco" id="newPreco" > <br><br>
			
			<input type="submit" id="btnAtualizaCadastro" value="Atualizar Cadastro">

			</form>
		  </blockquote>	

          <?php
          //RECEBENDO DADOS PARA CADASTRO DO HTML
		  $id_categoria = $_POST['id_categoria'];
		  $id_sub_categoria = $_POST['id_sub_categoria'];
		  $newQuantidade = $_POST['newQuantidade'];
		  $newPreco = $_POST['newPreco'];
		
          //Atualizando dados na base de dados
		  if($id_categoria >= 1 && $id_sub_categoria >= 1)
		  {
		  $sql = "UPDATE CADASTRO SET quantidade = $newQuantidade, preco = $newPreco where setor = $id_categoria and id = $id_sub_categoria";
		  if ($conn->query($sql) === TRUE) {
		  echo "Cadastro atualizado com sucesso";
		  } else {
		  echo "Error updating record: " . $conn->error;
		       }
		  }
          ?>

		  
		</div>	
    </div>
</div>

<footer class="container-fluid text-center"><a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a></footer>
<center><img src='images\barra.png'> </a></center>
 
  
  
<!-- Container (relatorios Section) -->
<div id="relatorios" class="container-fluid">
	<div class="col-sm-7 slideanim">
	    <div class="col-sm-8">
			<form>
			<blockquote>
			<fieldset>
				<a href="capilar.php"><img src="phplot/capilar/venda.php" /></a><br><p>
			</fieldset>   
			</blockquote>
			<blockquote>
			<fieldset>
				<a href="capilar.php"><img src="phplot/capilar/compra.php" /></a><br><p>
			</fieldset>   
			</blockquote>
			<blockquote>
			<fieldset>
				<a href="capilar.php"><img src="phplot/capilar/saldo.php" /></a><br><p>
			</fieldset>   
			</blockquote>
			</form>
		</div>	
    </div>
</div>

<footer class="container-fluid text-center"><a href="#myPage" title="To Top"><span class="glyphicon glyphicon-chevron-up"></span></a></footer>
<center><img src='images\barra.png'> </a></center>

<!-- Container (contatos Section) -->
<div id="contatos" class="container-fluid bg-grey">
  <h2 class="text-center">contatos</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contatos do Espaço VIP.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Francisco Morato, São Paulo - Brasil</p>
      <p><span class="glyphicon glyphicon-phone"></span> +55 998089109</p>
      <p><span class="glyphicon glyphicon-envelope"></span>janainaaraujodejesus2015@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Desenvolvido por... <a href="https://www.github.com/3ds2on" title="Visit 3ds2on">www.3ds2on.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });

  
 ///REALIZAÇÂO DA BUSCA PELA SUB CATEGORIA
 $(function(){
 	$('#id_categoria').change(function(){
 		///alert(id_categoria);
 		if( $(this).val() ) {
 			$('#id_sub_categoria').hide();
 			$('.carregando').show();
 			$.getJSON('sub_categorias_post.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
 				var options = '<option value="">Escolha o produto ou serviço</option>';	
 				for (var i = 0; i < j.length; i++) {
 					options += '<option value="' + j[i].id + '">' +' Descrição '+ j[i].nome_sub_categoria +'- Preço '+ j[i].preco +' - Quantidade '+ j[i].quantidade +'</option>';
 				}			
 				$('#id_sub_categoria').html(options).show();
 				$('.carregando').hide();
 			});
 		} else {
 			$('#id_sub_categoria').html('<option value="">– Escolha Subcategoria –</option>');
 		}
 	});
 });
 
 
  ///REALIZAÇÂO DA BUSCA PELA SUB CATEGORIA PARA DELETE
 $(function(){
 	$('#id_categoria_d').change(function(){
 		///alert(id_categoria_d);
 		if( $(this).val() ) {
 			$('#id_sub_categoria_d').hide();
 			$('.carregando').show();
 			$.getJSON('sub_categorias_delete.php?search=',{id_categoria_d: $(this).val(), ajax: 'true'}, function(j){
 				var options = '<option value="">Escolha o produto ou serviço</option>';	
 				for (var i = 0; i < j.length; i++) {
 					options += '<option value="' + j[i].id + '">' +' Descrição '+ j[i].nome_sub_categoria +'- Preço '+ j[i].preco +' - Quantidade '+ j[i].quantidade +'</option>';
 				}			
 				$('#id_sub_categoria_d').html(options).show();
 				$('.carregando').hide();
 			});
 		} else {
 			$('#id_sub_categoria_d').html('<option value="">– Escolha Subcategoria –</option>');
 		}
 	});
 });
  
  
///REALIZAÇÂO DA BUSCA PELA SUB CATEGORIA PARA COMPRA
 $(function(){
 	$('#id_categoria_c').change(function(){
 		///alert(id_categoria_c);
 		if( $(this).val() ) {
 			$('#id_sub_categoria_c').hide();
 			$('.carregando').show();
 			$.getJSON('sub_categorias_compra.php?search=',{id_categoria_c: $(this).val(), ajax: 'true'}, function(j){
 				var options = '<option value="">Escolha o produto ou serviço</option>';	
 				for (var i = 0; i < j.length; i++) {
 					options += '<option value="' + j[i].id + '">' +' Descrição '+ j[i].nome_sub_categoria +'- Preço '+ j[i].preco +' - Quantidade '+ j[i].quantidade +'</option>';
 				}			
 				$('#id_sub_categoria_c').html(options).show();
 				$('.carregando').hide();
 			});
 		} else {
 			$('#id_sub_categoria_c').html('<option value="">– Escolha Subcategoria –</option>');
 		}
 	});
 });
 
 
 ///REALIZAÇÂO DA BUSCA PELA SUB CATEGORIA PARA VENDA
 $(function(){
 	$('#id_categoria_v').change(function(){
 		///alert(id_categoria_v);
 		if( $(this).val() ) {
 			$('#id_sub_categoria_v').hide();
 			$('.carregando').show();
 			$.getJSON('sub_categorias_venda.php?search=',{id_categoria_v: $(this).val(), ajax: 'true'}, function(j){
 				var options = '<option value="">Escolha o produto ou serviço</option>';	
 				for (var i = 0; i < j.length; i++) {
 					options += '<option value="' + j[i].id + '">' +' Descrição '+ j[i].nome_sub_categoria +'- Preço '+ j[i].preco +' - Quantidade '+ j[i].quantidade +'</option>';
 				}			
 				$('#id_sub_categoria_v').html(options).show();
 				$('.carregando').hide();
 			});
 		} else {
 			$('#id_sub_categoria_v').html('<option value="">– Escolha Subcategoria –</option>');
 		}
 	});
 });
  

// VALIDANDO DADOS DO FORMULARIO PARA CADASTRO
  	    $('#btnCadastro').click(function(){
	    var cadDescricao = $('#cadDescricao').val();
	    var cadQuantidade = $('#cadQuantidade').val();
	    var cadPreco = $('#cadPreco').val();
	    var cadSetor = $('#cadSetor').val();

        //CHECA SE TODOS OS CAMPOS FORAM PREENCHIDOS
        if(cadDescricao.trim() == '' || cadQuantidade.trim() == '' || cadPreco.trim() == '' || cadSetor.trim() == ''){
        alert('PREENCHA TODAS INFORMAÇÔES PARA INCLUSÃO !!!');
		window.location.href = "capilar.php#cadastro";
        return;
        }

		//CHECA OS CAMPOS PERTINENTES A NUMEROS FORAM PREENCHIDOS
        if(isNaN(cadQuantidade) || isNaN(cadPreco))
        {
        alert('DIGITE SOMENTE NUMEROS PARA QUANTIDADE E PREÇOS');
		window.location.href = "capilar.php#cadastro";
        return;
        }
		});	
		
		
		
// VALIDANDO DADOS DO FORMULARIO PARA CADASTRO 
		$('#btnAtualizaCadastro').click(function(){
	    var newQuantidade = $('#newQuantidade').val();
	    var newPreco = $('#newPreco').val();

        //CHECA SE TODOS OS CAMPOS FORAM PREENCHIDOS
        if(newQuantidade.trim() == '' || newPreco.trim() == ''){
        alert('PREENCHA TODAS INFORMAÇÔES PARA ATUALIZAÇÂO !!!');
		window.location.href = "capilar.php#cadastro";
        return;
        }

		//CHECA OS CAMPOS PERTINENTES A NUMEROS FORAM PREENCHIDOS
        if(isNaN(newQuantidade) || isNaN(newPreco))
        {
        alert('DIGITE SOMENTE NUMEROS PARA QUANTIDADE E PREÇOS');
		window.location.href = "capilar.php#cadastro";
        return;
        }
		
		var newPreco = valor.toLocaleString('pt-BR', { minimumFractionDigits: 2});
		alert('O valor formatado sem o cifrão de ' + valor + ' é ' + newPreco);
		
		});	
		

//CHECA OS CAMPOS PERTINENTES A NUMEROS FORAM PREENCHIDOS PARA CADASTRO		
		$('#btnVenderProduto').click(function(){
        // VALIDANDO DADOS DO FORMULARIO PARA CADASTRO
	    var vendaQuantidade = $('#vendaQuantidade').val();

        //CHECA SE TODOS OS CAMPOS FORAM PREENCHIDOS
        if(vendaQuantidade.trim() == '' ){
        alert('PREENCHA TODAS INFORMAÇÔES PARA VENDER !!!');
		window.location.href = "capilar.php#cadastro";
        return;
        }

		//CHECA OS CAMPOS PERTINENTES A NUMEROS FORAM PREENCHIDOS
        if(isNaN(vendaQuantidade))
        {
        alert('DIGITE SOMENTE NUMEROS PARA QUANTIDADE');
		window.location.href = "capilar.php#cadastro";
        return;
        }
		
		});	
		
		
//CHECA OS CAMPOS PERTINENTES A NUMEROS FORAM PREENCHIDOS PARA COMPRAR
		$('#btnComprarProduto').click(function(){
        // VALIDANDO DADOS DO FORMULARIO PARA CADASTRO
	    var compraQuantidade = $('#compraQuantidade').val();

        //CHECA SE TODOS OS CAMPOS FORAM PREENCHIDOS
        if(compraQuantidade.trim() == '' ){
        alert('PREENCHA TODAS INFORMAÇÔES PARA COMPRAR !!!');
		window.location.href = "capilar.php#comprar";
        return;
        }

		//CHECA OS CAMPOS PERTINENTES A NUMEROS FORAM PREENCHIDOS
        if(isNaN(compraQuantidade))
        {
        alert('DIGITE SOMENTE NUMEROS PARA QUANTIDADE');
		window.location.href = "capilar.php#comprar";
        return;
        }
		
		});		

		
		
//CHECA OS CAMPOS PERTINENTES A NUMEROS FORAM PREENCHIDOS PARA DELETE
		$('#btnDeleteCadastro').click(function(){
        // VALIDANDO DADOS DO FORMULARIO PARA CADASTRO
	    var id_sub_categoria_d = $('#id_sub_categoria_d').val();

        //CHECA SE TODOS OS CAMPOS FORAM PREENCHIDOS
        if(id_sub_categoria_d.trim() == '' ){
        alert('PREENCHA TODAS INFORMAÇÔES PARA DELETE !!!');
		window.location.href = "capilar.php#cadastro";
        return;
        }

		//CHECA OS CAMPOS PERTINENTES A NUMEROS FORAM PREENCHIDOS
        if(isNaN(id_sub_categoria_d))
        {
        alert('DIGITE SOMENTE NUMEROS PARA DELETE');
		window.location.href = "capilar.php#cadastro";
        return;
        }
		  
		});			
			 
  
  
})
</script>

</body>
</html>
