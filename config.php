<?php

   $dbHost = 'Localhost';
   $dbUsername = 'root';
   $dbPasword = '';
   $dbName =  'formulario_everson';

   $conexao = new mysqli($dbHost,$dbUsername,$dbPasword,$dbName);

   // if($conexao->connect_errno)
   // {
   //    echo "Erro";
   // }
   // else
   // {
   //    echo "Conexão efetuada com sucesso";
   // }

?>