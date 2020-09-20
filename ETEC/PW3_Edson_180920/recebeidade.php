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
class Verifica
{
    public $txtAnoAtual;
    public $txtAnoNacimento;

    function verifica_idade()
    {
		if($this->txtAnoAtual >=1 && $this->txtAnoNacimento >=1)
		{	
        $resultado = $this->txtAnoAtual - $this->txtAnoNacimento;
        if($resultado >= 1 && $resultado <= 11)
        {
            echo "<h2><center><FONT COLOR='#FF4000'><b>Você tem aproximadamente ".$resultado." anos de idade.</b></FONT></center></h2>";
			echo "<h2><center><FONT COLOR='#FF4000'><b>Categoria: CRIANÇA</b></FONT></center></h2>";
			echo "<a href='index.php#calcularidade'>";
        }
        else if($resultado >= 12 && $resultado <= 17)
        {
            echo "<h2><center><FONT COLOR='#FF4000'><b>Você tem aproximadamente ".$resultado." anos de idade</b></FONT></center></h2>";
			echo "<h2><center><FONT COLOR='#FF4000'><b>Categoria: ADOLECENTE</b></FONT></center></h2>";
			echo "<a href='index.php#calcularidade'>";
        }
		else if($resultado >= 18 && $resultado <= 60)
        {
            echo "<h2><center><FONT COLOR='#FF4000'><b>Você tem aproximadamente ".$resultado." anos de idade</b></FONT></center></h2>";
			echo "<h2><center><FONT COLOR='#FF4000'><b>Categoria: ADULTO</b></FONT></center></h2>";
			echo "<a href='index.php#calcularidade'>";
        }
		else if($resultado >= 61)
        {
            echo "<h2><center><FONT COLOR='#FF4000'><b>Você tem aproximadamente ".$resultado." anos de idade</b></FONT></center></h2>";
			echo "<h2><center><FONT COLOR='#FF4000'><b>Categoria: IDOSO</b></FONT></center></h2>";
			echo "<a href='index.php#calcularidade'>";
        }
        }
	}

}
?>

