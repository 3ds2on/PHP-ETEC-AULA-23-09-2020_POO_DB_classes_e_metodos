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
class Exibefrase
{
    public $txtFrase;
    public $txtQuantidadeFrase;
 
    function exibir_frase()
    {
		if ($this->txtQuantidadeFrase >=2)
		{
		echo "<h2><center><FONT COLOR='#FF4000'><b>SUA FRASE SERÁ REPETIDA ".$this->txtQuantidadeFrase." VEZES</b></FONT></center></h2>";
		for($cont = 1; $cont <= $this->txtQuantidadeFrase; $cont++ )
		{
        echo "<h2><center><FONT COLOR='#FF4000'><b><br></b></FONT></center></h2>";			
		echo "<h2><center><FONT COLOR='#FF4000'><b>$cont ª - $this->txtFrase</b></FONT></center></h2>";			
		}
		}
		else if ($this->txtQuantidadeFrase == 1)
		{
		echo "<h2><center><FONT COLOR='#FF4000'><b>SUA FRASE SERÁ APRESENTADA ".$this->txtQuantidadeFrase." VEZ</b></FONT></center></h2>";
        echo "<h2><center><FONT COLOR='#FF4000'><b><br></b></FONT></center></h2>";			
		echo "<h2><center><FONT COLOR='#FF4000'><b>$this->txtFrase</b></FONT></center></h2>";			
		}
	}
}
?>