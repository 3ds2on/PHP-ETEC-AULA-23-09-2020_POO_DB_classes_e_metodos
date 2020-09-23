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
