// Hello.
//
// This is JSHint, a tool that helps to detect errors and potential
// problems in your JavaScript code.
//
// To start, simply enter some JavaScript anywhere on this page. Your
// report will appear on the right side.
//
// Additionally, you can toggle specific options in the Configure
// menu.

$(document).ready(function(){
	$('#nav-menu').click(function(){
		$('ul.nav-list').addClass('open').slideToggle('200');
	});
});

$( document ).ready(function() {
	
	    $('#btnValidaCPFvetor').click(function(){
			
		// VALIDANDO DADOS DO FORMULARIO
		var txtNome = $('#txtNome').val();
        var txtEmail = $('#txtEmail').val();
		var txtMensagem = $('#txtMensagem').val();
		var txtCelular = $('#txtCelular').val();
			
		if(txtNome.trim() == '' || txtEmail.trim() == '' || txtMensagem.trim() == ''|| txtCelular.trim() == ''){
        alert('PREENCHA TODOS CAMPOS DO FORMULARIO !!!');
        return;
        }
        if(isNaN(txtCelular))
        {
        alert('DIGITE SOMENTE NUMEROS PARA SEU TELEFONE !!!');
        return;
        }
		
		
		// RECEBENDO VETOR COM SUBSTRING PARA O CPF
		var cpfDigitalizado = [];
        for(var cont = 0 ; cont <=10; cont++){
		cpfDigitalizado[cont] = $('#txtCPF').val().substring(cont,cont + 1);
		}
		      	
		if(cpfDigitalizado[0].trim() == '' || cpfDigitalizado[1].trim() == '' || cpfDigitalizado[2].trim() == ''|| cpfDigitalizado[3].trim() == ''|| cpfDigitalizado[4].trim() == ''|| cpfDigitalizado[5].trim() == ''|| cpfDigitalizado[6].trim() == ''|| cpfDigitalizado[7].trim() == ''|| cpfDigitalizado[8].trim() == ''|| cpfDigitalizado[9].trim() == ''|| cpfDigitalizado[10].trim() == ''){
        alert('PREENCHA TODOS OS NUMEROS DO SEU CPF');
        return;
        }
        if(isNaN(cpfDigitalizado[0]) || isNaN(cpfDigitalizado[1])|| isNaN(cpfDigitalizado[2])|| isNaN(cpfDigitalizado[3])|| isNaN(cpfDigitalizado[4])|| isNaN(cpfDigitalizado[5])|| isNaN(cpfDigitalizado[6])|| isNaN(cpfDigitalizado[7])|| isNaN(cpfDigitalizado[8])|| isNaN(cpfDigitalizado[9])|| isNaN(cpfDigitalizado[10]))
        {
        alert('DIGITE SOMENTE NUMEROS PARA SEU CPF');
        return;
        }
		
		//CALCULANDO O PRIMEIRO DIGITO VERIFICADOR
	    var PrimeiraMultSoma = 0;
		var PrimeiroResto = 0;
		var ResulteResto = 0;
		var PrimeiroVerificador = 0;
		
    	if(PrimeiraMultSoma == 0) 
		{
		PrimeiraMultSoma = (cpfDigitalizado[0] * 10) + (cpfDigitalizado[1] * 9) + (cpfDigitalizado[2] * 8) + (cpfDigitalizado[3] * 7) + (cpfDigitalizado[4] * 6) + (cpfDigitalizado[5] * 5) + (cpfDigitalizado[6] * 4) + (cpfDigitalizado[7] * 3) + (cpfDigitalizado[8] * 2);
		PrimeiroResto = PrimeiraMultSoma % 11;
		ResulteResto = 11-PrimeiroResto;
		}
		if(ResulteResto > 9)
		{
		PrimeiroVerificador = 0;
		}
		else
		{
		PrimeiroVerificador = ResulteResto;
		}
	    
		//CALCULANDO O SEGUNDO DIGITO VERIFICADOR
	    var SegundaMultSoma = 0;
		var SegundoResto = 0;
		var ResultSegundoResto = 0;
		var SegundoVerificador = 0;
		
    	if(SegundaMultSoma == 0) 
		{
		SegundaMultSoma = (cpfDigitalizado[0] * 11) + (cpfDigitalizado[1] * 10) + (cpfDigitalizado[2] * 9) + (cpfDigitalizado[3] * 8) + (cpfDigitalizado[4] * 7) + (cpfDigitalizado[5] * 6) + (cpfDigitalizado[6] * 5) + (cpfDigitalizado[7] * 4) + (cpfDigitalizado[8] * 3) + (PrimeiroVerificador * 2);
		SegundoResto = SegundaMultSoma % 11;
		ResultSegundoResto = 11-SegundoResto;
		}
		if(ResultSegundoResto > 9)
		{
		SegundoVerificador = 0;
		}
		else
		{
		SegundoVerificador = ResultSegundoResto;
		}
			
		//IMPRIME RESULTADOS 	
		if(cpfDigitalizado[0] == cpfDigitalizado[1] && cpfDigitalizado[2] == cpfDigitalizado[3] && cpfDigitalizado[4]  == cpfDigitalizado[5] && cpfDigitalizado[6] == cpfDigitalizado[7] && cpfDigitalizado[8] == cpfDigitalizado[9]) 
		{
		$('#CPFvalidoVetor').html("");
		$('#CPFinvalidoVetor').html("");
		$('#MensagemEnviada').html("");
		$('#CPFinvalidoVetor').text ('CPF INVALIDO');	 
		$('#ApresentaCPFverificador	').text ("DIGITOS PARA VERIFICAÇÃO ");
		$('#ApresentaCPFprimeiroVetor').text (PrimeiroVerificador);
		$('#ApresentaCPFsegundoVetor').text (SegundoVerificador);	
		}		
		else if (PrimeiroVerificador == cpfDigitalizado[9] && SegundoVerificador == cpfDigitalizado[10]) 
		{
		$('#CPFvalidoVetor').html("");
		$('#CPFinvalidoVetor').html("");
		$('#MensagemEnviada').html("");
	    $('#MensagemEnviada').text ("MENSAGEM ENVIADA COM SUCESSO !!! ");
		}
		else
		{
		$('#CPFvalidoVetor').html("");
		$('#CPFinvalidoVetor').html("");
		$('#MensagemEnviada').html("");
		$('#CPFinvalidoVetor').text ('CPF INVALIDO');	
		$('#ApresentaCPFverificador	').text ("DIGITOS PARA VERIFICAÇÃO ");		
		$('#ApresentaCPFprimeiroVetor').text (PrimeiroVerificador);
		$('#ApresentaCPFsegundoVetor').text (SegundoVerificador);	
		}		
		});			
		
		
		
		//GERENCIANDO O CARROSEL DA HOME "https://www.w3schools.com/w3css/w3css_slideshow.asp"
		var slideIndex = 0;
		carousel();
		function carousel() {
  		var i;
  		var x = document.getElementsByClassName("mySlides");
  		for (i = 0; i < x.length; i++) {
    	x[i].style.display = "none";
  		}
  		slideIndex++;
  		if (slideIndex > x.length) {slideIndex = 1}
  		x[slideIndex-1].style.display = "block";
  		setTimeout(carousel, 2000); // Change image every 2 seconds
		}

	
	
		//GERENCIANDO O PROCEDIMENTO DE COMPRA DO PRODUTO
		$('#btnVendeProduto').click(function(){

        var DescricaProduto = $('#DescricaProduto').val();
        var PrecoProduto = $('#PrecoProduto').val();
		var QtdProduto = $('#QtdProduto').val();
		var QtdParcelas = $('#QtdParcelas').val();
		var ValorTotal = 0;
		var ValorDaParcela = 0;
		var ValorDesconto = 0;
		var ValorTotalDescontado = 0;
		var ValorTotalAcrecido = 0;

		
		if(PrecoProduto.trim() == '' || QtdProduto.trim() == '' || DescricaProduto.trim() == ''){
        alert('Os campos descrição, preço e quantidade são obrigatorios.');
        return;
        }
        if(isNaN(PrecoProduto) || isNaN(QtdProduto))
        {
        alert('Digite apenas números para preço e quantidade.');
        return;
        }
    	if(QtdProduto < 1) 
		{
        alert ('A quantidade deve ser maior ou igual a 1.');
	    return;
		}
		if(QtdParcelas == 0) 
		{
        alert ('Você precisa digitar uma ou mais parcelas');
	    return;
		}
         
       	if ( QtdParcelas == 1){
		ValorDaParcela = PrecoProduto/QtdParcelas;
		ValorTotal = ValorDaParcela*QtdParcelas;
		ValorDesconto = (3*PrecoProduto)/100
		ValorTotalDescontado = ValorTotal - ValorDesconto;
		$('#ValorParaPagar').text ("Seu pagamento sera a vista, você recebeu 3% de desconto! O valor total da compra é R$: " +ValorTotalDescontado);			
		}
		else if (QtdParcelas > 1 && QtdParcelas <= 10){
		ValorDaParcela = PrecoProduto/QtdParcelas;
		ValorTotal = QtdParcelas*ValorDaParcela;
		$('#ValorParaPagar').text ("Seu pagamento sera em: " +parseInt(QtdParcelas)+ " vezes de R$: "  +parseInt(ValorDaParcela)+ "\n O valor total da compra é R$: " +parseInt(ValorTotal));			
		}
		else if (QtdParcelas > 10){
		ValorDaParcela = PrecoProduto/QtdParcelas;
		ValorTotal = ValorDaParcela*QtdParcelas;
		ValorAcrecimo = (10*PrecoProduto)/100
		ValorTotalAcrecido = ValorTotal + ValorAcrecimo;
		$('#ValorParaPagar').text ("Seu pagamento sera em: " +parseInt(QtdParcelas)+ " vezes de R$: "  +parseInt(ValorDaParcela)+ ", isso gerou um acrecimo de 10%, o valor total da compra é R$: " +ValorTotalAcrecido);			
		}
		
		});	
	
	
});	
