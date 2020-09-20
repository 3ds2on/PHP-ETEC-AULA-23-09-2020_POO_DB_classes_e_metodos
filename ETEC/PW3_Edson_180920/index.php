<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Atividade de PW3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<!-- Propriedades da barra superior -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#calcularidade">CALCULAR IDADE</a></li>
        <li><a href="#dividircontas">DIVIDIR CONTA</a></li>
        <li><a href="#imprimirfrases">IMPRIMIR FRASE</a></li>
        <li><a href="#jogojokenpo">JOGO JOKENPO</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Atividade PW3 - Profº Anderson Espera</h1> 
  <p>Edson Araujo de Jesus</p> 
</div>
			
<!-- Container (calcularidade Section) -->
<div id="calcularidade" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
			<form method="post">
			<h2><FONT COLOR="#FF4000"><b>CALCULAR IDADE</b></FONT></h2>
			<br>ANO ATUAL </br><input name="txtAnoAtual" type="number" id="txtAnoAtual" value="0"/><br>
			<br>ANO DE NASCIMENTO </br><input name="txtAnoNacimento" type="number" id="txtAnoNacimento" value="0"/><br>
			<br><input type="submit" name="submit" id="btnVerificarIdade" value="VERIFICAR"/><br>
			</form>
			
			<?php include('recebeidade.php'); //incluir arquivo para calcular a idade
			$v = new Verifica(); //instância da classe para calcular a idade
			$v->txtAnoAtual = $_POST["txtAnoAtual"]; //Consumindo a clase para atribuir um valor
			$v->txtAnoNacimento = $_POST["txtAnoNacimento"]; //Consumindo a clase para atribuir um valor
			$v->verifica_idade(); //Consumindo a clase e acionando o metodo para verificar 
			?>
    </div>
  </div>
</div>
  
<center><img src='img\barra.png'> </a></center>

<!-- Container (dividircontas Section) -->
<div id="dividircontas" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
			<form method="post">
			<h2><FONT COLOR="#FF4000"><b>DIVIDIR CONTA</b></FONT></h2>
			<br>VALOR DO CONSUMO </br><input name="txtValorConsumo" type="number" id="txtValorConsumo" value="0"/><br>
			<br>QUANTIDADE DE PESSOAS </br><input name="txtQuantidadePessoas" type="number" id="txtQuantidadePessoas" value="0"/><br>
			<br>VALOR COUVERT ARTISTICO </br><input name="txtValorCouvert" type="number" id="txtValorCouvert" value="0"/><br>
			<br>APLICAR TAXA DE SERVIÇO DE 10% ?.<select name="txtTaxaServico"  id="txtTaxaServico"><option value="sim">SIM</option><option value="nao">NÃO</option></select></br>
			<br><input type="submit" name="submit" id="btnDividirConta" value="VERIFICAR"/><br>
			</form>
			
			<?php include('dividirconta.php'); //incluir arquivo para dividir a conta
			$v = new Dividirconta(); //instância da classe para dividir a conta
			$v->txtValorConsumo = $_POST["txtValorConsumo"]; //Consumindo a clase para atribuir um valor
			$v->txtQuantidadePessoas = $_POST["txtQuantidadePessoas"]; //Consumindo a clase para atribuir um valor
			$v->txtValorCouvert = $_POST["txtValorCouvert"]; //Consumindo a clase para atribuir um valor
			$v->txtTaxaServico = $_POST["txtTaxaServico"]; //Consumindo a clase para atribuir um valor
			$v->dividir_conta(); //Consumindo a clase e acionando o metodo para verificar 
			?>			
    </div>
  </div>
</div>
  
<center><img src='img\barra.png'> </a></center>
 
<!-- Container (imprimirfrases Section) -->
<div id="imprimirfrases" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
			<form method="post">
			<h2><FONT COLOR="#FF4000"><b>EXIBA SUA FRASE</b></FONT></h2>
			<br>INFORME A FRASE </br><input name="txtFrase" type="text" id="txtFrase" size="50" value="Digite uma frase qualquer."/><br>
			<br>QUANTIDADE DE VEZES </br><input name="txtQuantidadeFrase" type="number" id="txtQuantidadeFrase" value="0" /><br>
			<br><input type="submit" name="submit" id="btnExibirFrase" value="EXIBIR"/><br>
			</form>
			
			<?php  include('exibefrase.php'); //incluir arquivo para exibir frase
			$v = new Exibefrase(); //instância da classe para exibir frase
			$v->txtFrase = $_POST["txtFrase"]; //Consumindo a clase para atribuir um valor
			$v->txtQuantidadeFrase = $_POST["txtQuantidadeFrase"]; //Consumindo a clase para atribuir um valor
			$v->exibir_frase(); //Consumindo a clase e acionando o metodo para verificar 
			?>			
    </div>
  </div>
</div>

<center><img src='img\barra.png'> </a></center>
 
<!-- Container (jogojokenpo Section) -->
<div id="jogojokenpo" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
			<form method="post">
			<h2><FONT COLOR="#FF4000"><b>JOGO JOKENPO</b></FONT></h2>
			<br>ESCOLHA UMA OPÇÂO (pedra, papel ou tesoura)</br>
			<br><select name="txtOpcaoJogador"  id="txtOpcaoJogador"><option value=1>PEDRA</option><option value=2>PAPEL</option><option value=3>TESOURA</option></select></br>
			<br><input type="submit" name="submit" id="btnJogar" value="JOGAR"/><br>
			</form>
			
			<?php include('jogojokenpo.php'); //incluir arquivo para jogar
			$v = new Jogojokenpo(); //instância da classe para jogar
			$v->txtOpcaoJogador = $_POST["txtOpcaoJogador"]; //Consumindo a clase para atribuir um valor
			$v->jogar_jokenpo(); //Consumindo a clase e acionando o metodo para jogar 
			?>			
    </div>
  </div>
</div>

<center><img src='img\barra.png'> </a></center>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Desenvolvido por: <a href="https://www.github.com/3ds2on" title="Visit w3schools">www.github.com/3ds2on</a></p>
</footer>

<script>
        // ESTE TRECHO É PETINENTE A TODA INTERFACE
		
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
		

		// ESTE TRECHO É PETINENTE A VALIDAÇÂO DA INDADE
 	    $('#btnVerificarIdade').click(function(){
	    
        // Recebendo os dados do formulario
	    var txtAnoAtual = $('#txtAnoAtual').val();
	    var txtAnoNacimento = $('#txtAnoNacimento').val();

        //Validando se todos os campos foram preenchidos
        if(txtAnoAtual.trim() == '' || txtAnoNacimento.trim() == ''){
        alert('Por gentileza, preencha todos os campos !!!');
		location.href = "#calcularidade";
        return;
        }

		//Checando se campos destinados a numeros contem somente numeros.
        if(isNaN(txtAnoAtual) || isNaN(txtAnoNacimento)){
        alert('Por gentileza, digite somente numeros!!!');
		location.href = "#calcularidade";
        return;
        }
		
		//Checando se temos numeros negativos.
        if(txtAnoAtual.trim() <= 0 || txtAnoNacimento.trim() <= 0){
        alert('O valor digitado é inferior a UM, favor verificar!!!');
		location.href = "#calcularidade";
        return;
        }
		
			
		});
		
		
	    // ESTE TRECHO É PETINENTE A DIVISÂO DE CONTAS
 	    $('#btnDividirConta').click(function(){
	    
        // Recebendo os dados do formulario
	    var txtValorCouvert = $('#txtValorCouvert').val();
	    var txtTaxaServico = $('#txtTaxaServico').val();
		var txtValorConsumo = $('#txtValorConsumo').val();        	
		var txtQuantidadePessoas = $('#txtQuantidadePessoas').val();

        //Validando se todos os campos foram preenchidos
        if(txtValorCouvert.trim() == '' || txtValorConsumo.trim() == '' || txtQuantidadePessoas.trim() == ''){
        alert('Por gentileza, preencha todos os campos !!!');
		location.href = "#dividircontas";
        return;
        }
	
		//Checando se temos numeros negativos.
        if(txtValorCouvert.trim() <= 0 || txtValorConsumo.trim() <= 0 || txtQuantidadePessoas.trim() <= 0){
        alert('O valor digitado é inferior a UM, favor verificar!!!');
		location.href = "#dividircontas";
        return;
        }
			
		});
		
		
		
		// ESTE TRECHO É PETINENTE A EXIBIÇÂO DE FRASES
 	    $('#btnExibirFrase').click(function(){
	    
        // Recebendo os dados do formulario
	    var txtFrase = $('#txtFrase').val();
	    var txtQuantidadeFrase = $('#txtQuantidadeFrase').val();

        //Validando se todos os campos foram preenchidos
        if(txtQuantidadeFrase.trim() == '' || txtFrase.trim() == ''){
        alert('Por gentileza, preencha todos os campos !!!');
		location.href = "#imprimirfrases";
        return;
        }
			
		//Checando se temos numeros negativos.
        if(txtQuantidadeFrase.trim() <= 0){
        alert('O valor digitado é inferior a UM, favor verificar!!!');
		location.href = "#imprimirfrases";
        return;
        }
			
		});
		
		
		// ESTE TRECHO É PETINENTE AO JOGO
 	    $('#btnJogar').click(function(){
	    
        // Recebendo os dados do formulario
	    var txtOpcaoJogador = $('#txtOpcaoJogador').val();
	    
        //Validando se todos os campos foram preenchidos
        if(txtOpcaoJogador.trim() == ''){
        alert('Por gentileza, escolha uma opção para jogar !!!');
		location.href = "#jogojokenpo";
        return;
        }
			
		});
		
		
})

</script>

</body>
</html>

