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
<?php include_once("conexao.php"); 

	$id_categoria_v = $_REQUEST['id_categoria_v'];
	
	$result_sub_cat = "SELECT * FROM CADASTRO WHERE SETOR=$id_categoria_v ORDER BY descricao";
	$resultado_sub_cat = mysqli_query($conn, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'id'	=> $row_sub_cat["id"],
			'nome_sub_categoria' => utf8_encode($row_sub_cat["descricao"]),
			'preco'	=> $row_sub_cat["preco"],
			'quantidade'	=> $row_sub_cat["quantidade"],
		);
	}

	echo(json_encode($sub_categorias_post));
