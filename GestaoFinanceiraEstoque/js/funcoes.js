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

$( document ).ready(function() {
	
	    $('#btnCadastro').click(function(){
	    
        // VALIDANDO DADOS DO FORMULARIO PARA CADASTRO
	    var cadDescricao = $('#cadDescricao').val();
	    var cadQuantidade = $('#cadQuantidade').val();
	    var cadPreco = $('#cadPreco').val();
	    var cadSetor = $('#cadSetor').val();
	    
	    

        //CHECA SE TODOS OS CAMPOS FORAM PREENCHIDOS
        if(cadDescricao.trim() == '' || cadQuantidade.trim() == '' || cadPreco.trim() == '' || cadSetor.trim() == ''){
        alert('SELECIONE UM MODELO DE VEICULO !!!');
        return;
        }
                
				
		//CHECA OS CAMPOS PERTINENTES A NUMEROS FORAM PREENCHIDOS
        if(isNaN(cadQuantidade) || isNaN(cadPreco))
        {
        alert('DIGITE SOMENTE NUMEROS PARA QUANTIDADE E PREÇOS');
        return;
        }
	
});	
};