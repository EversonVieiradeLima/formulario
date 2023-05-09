<?php

   if(isset($_POST['submit']))
   {
      // print_r('Nome: ' . $_POST['nome']);
      // print_r('<br>');
      // print_r('Email: ' . $_POST['email']);
      // print_r('<br>');
      // print_r('Telefone: ' . $_POST['telefone']);
      // print_r('<br>');
      // print_r('Telefone: ' . $_POST['sexo']);
      // print_r('<br>');
      // print_r('Telefone: ' . $_POST['data_nascimento']);
      // print_r('<br>');
      // print_r('Telefone: ' . $_POST['cidade']);
      // print_r('<br>');
      // print_r('Telefone: ' . $_POST['estado']);
      // print_r('<br>');
      // print_r('Telefone: ' . $_POST['endereco']);

      include_once('config.php');

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $sexo = $_POST['sexo'];
      $data_nascimento = $_POST['data_nascimento'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];
      $endereco = $_POST['endereco'];

      $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,telefone,sexo,data_nascimento,cidade,estado,endereco) VALUES ('$nome','$email','$telefone','$sexo','$data_nascimento','$cidade','$estado','$endereco')");
   }

?>

<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>Formulário</title>
   </head>
   <body>
      <div class="box">
         <form action="index.php" method="POST">
            <fieldset>
               <legend><b>Formulário de Clientes</b></legend>
               <br>

               <div class="inputBox">
                  <input type="text" name="nome" id="nome" class="inputUser" required>
                  <label for="nome" class="labelInput">Nome Completo</label>
               </div>
               <br><br>

               <div class="inputBox">
                  <input type="text" name="email" id="email" class="inputUser" required>
                  <label for="email" class="labelInput">Email</label>
               </div>
               <br><br>

               <div class="inputBox">
                  <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                  <label for="telefone" class="labelInput">Telefone</label>
               </div>

               <p>Sexo:</p>
               <input type="radio" id="feminino" name="sexo" value="feminino" required>
               <label for="feminino">Feminino</label>
               <br>
               <input type="radio" id="masculino" name="sexo" value="masculino" required>
               <label for="masculino">Masculino</label>
               <br>
               <input type="radio" id="outro" name="sexo" value="outro" required>
               <label for="outro">Outro</label>
               <br><br>

               <label for="data_nascimento"><b>Data de Nascimento</b></label>
               <input type="date" name="data_nascimento" id="data_nascimento" required>
               <br><br><br>

               <div class="inputBox">
                  <input type="text" name="cidade" id="cidade" class="inputUser" required>
                  <label for="cidade" class="labelInput">Cidade</label>
               </div>
               <br><br>

               <div class="inputBox">
                  <input type="text" name="estado" id="estado" class="inputUser" required>
                  <label for="estado" class="labelInput">Estado</label>
               </div>
               <br><br>

               <div class="inputBox">
                  <input type="text" name="endereco" id="endereco" class="inputUser" required>
                  <label for="endereco" class="labelInput">Endereco</label>
               </div>
               <br><br>

               <input type="submit" name="submit" id="submit">
            </fieldset>
         </form>
      </div>
   </body>
</html>