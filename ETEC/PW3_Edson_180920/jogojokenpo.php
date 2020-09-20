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
class Jogojokenpo
{
    public $txtOpcaoJogador;
	
 
    function jogar_jokenpo()
    {
		
	$txtOpcaoComputador = rand(1,3); //sorteio computador de 1 a 3
	if($txtOpcaoComputador == 1)$nomeOpcaoComputador = 'Pedra'; //Se o computador escolher 1 será Pedra
	else if($txtOpcaoComputador ==2 )$nomeOpcaoComputador = 'Papel'; //Se o computador escolher 2 será Papel
	else if($txtOpcaoComputador ==3 )$nomeOpcaoComputador = 'Tesoura'; //Se o computador escolher 3 será Tesoura

	if($this->txtOpcaoJogador == 1)$nomeOpcaoJogador = 'Pedra'; //Se o Jogador escolher 1 será Pedra
	else if($this->txtOpcaoJogador ==2 )$nomeOpcaoJogador = 'Papel'; //Se o Jogador escolher 2 será Papel
	else if($this->txtOpcaoJogador ==3 )$nomeOpcaoJogador = 'Tesoura'; //Se o Jogador escolher 3 será Tesoura
	
	if($this->txtOpcaoJogador == 1 ||$this->txtOpcaoJogador == 2 ||$this->txtOpcaoJogador == 3)
	{
    echo "<h2><center><FONT COLOR='#FF4000'><b>JOKENPO</b></FONT></center></h2>";
    echo "<h2><center><FONT COLOR='#FF4000'><b><br></b></FONT></center></h2>";
    echo "<h2><center><FONT COLOR='#FF4000'><b>Opção do Jogador: ".$nomeOpcaoJogador."</b></FONT></center></h2>";		
	echo "<h2><center><FONT COLOR='#FF4000'><b>Opção do Computador: ".$nomeOpcaoComputador."</b></FONT></center></h2>";		
    if($this->txtOpcaoJogador == $txtOpcaoComputador)
    echo "<h2><center><FONT COLOR='#FF4000'><b>EMPATE</b></FONT></center></h2>";
    else if($this->txtOpcaoJogador == 1 && $txtOpcaoComputador == 2)
	echo "<h2><center><FONT COLOR='#FF4000'><b>VITORIA DO COMPUTADOR</b></FONT></center></h2>";
    else if($this->txtOpcaoJogador == 1 && $txtOpcaoComputador == 3)
	echo "<h2><center><FONT COLOR='#FF4000'><b>VITORIA DO JOGADOR</b></FONT></center></h2>";
    else if($this->txtOpcaoJogador == 2 && $txtOpcaoComputador == 1)
	echo "<h2><center><FONT COLOR='#FF4000'><b>VITORIA DO JOGADOR</b></FONT></center></h2>";
    else if($this->txtOpcaoJogador == 2 && $txtOpcaoComputador == 3)
	echo "<h2><center><FONT COLOR='#FF4000'><b>VITORIA DO COMPUTADOR</b></FONT></center></h2>";
    else if($this->txtOpcaoJogador == 3 && $txtOpcaoComputador == 1)
    echo "<h2><center><FONT COLOR='#FF4000'><b>VITORIA DO COMPUTADOR</b></FONT></center></h2>";
    else if($this->txtOpcaoJogador == 3 && $txtOpcaoComputador == 2)
	echo "<h2><center><FONT COLOR='#FF4000'><b>VITORIA DO JOGADOR</b></FONT></center></h2>";
	}

	}
}
?>