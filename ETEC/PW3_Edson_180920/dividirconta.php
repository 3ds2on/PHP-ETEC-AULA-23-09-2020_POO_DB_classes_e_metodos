<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Atividades
 *
 * @author edson
 */
class Dividirconta
{
    public $txtValorConsumo;
    public $txtQuantidadePessoas;
    public $txtValorCouvert;
    public $txtTaxaServico;
 
    function dividir_conta()
    {
                if ($this->txtValorConsumo >= 1 && $this->txtQuantidadePessoas >= 1 && $this->txtValorCouvert >= 1 && $this->txtTaxaServico == 'sim')
                {
                        $couvertArtistico = $this->txtValorCouvert * $this->txtQuantidadePessoas;
                        $taxaServico= $this->txtValorConsumo * 0.1;
                        $totalConta = $this->txtValorConsumo + $couvertArtistico + $taxaServico;
                        $valorPorPessoa = $totalConta / $this->txtQuantidadePessoas;
                        
                        echo "<h2><center><FONT COLOR='#FF4000'><b>RESUMO DA CONTA</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b><br></b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Total do Consumo: ".$this->txtValorConsumo."</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Valor do couvert artistico: ".$couvertArtistico."</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Taxa de serviço: ".$taxaServico."</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Total da conta: ".$totalConta."</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Valor por Pessoa: ".$valorPorPessoa."</b></FONT></center></h2>";
                        echo "<a href='index.php#dividircontas'>";
                }
                else if ($this->txtValorConsumo >= 1 && $this->txtQuantidadePessoas >= 1 && $this->txtValorCouvert >= 1 && $this->txtTaxaServico == 'nao')
                {
                        $couvertArtistico = $this->txtValorCouvert * $this->txtQuantidadePessoas;
                        $totalConta = $this->txtValorConsumo + $couvertArtistico;
                        $valorPorPessoa = $totalConta / $this->txtQuantidadePessoas;
                        
                        echo "<h2><center><FONT COLOR='#FF4000'><b>RESUMO DA CONTA</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b><br></b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Total do Consumo: ".$this->txtValorConsumo."</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Valor do couvert artistico: ".$couvertArtistico."</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Taxa de serviço: 0</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Total da conta: ".$totalConta."</b></FONT></center></h2>";
                        echo "<h2><center><FONT COLOR='#FF4000'><b>Valor por Pessoa: ".$valorPorPessoa."</b></FONT></center></h2>";
                        echo "<a href='index.php#dividircontas'>";
                }
	}
}
?>