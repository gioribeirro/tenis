<?php
if(isset($_POST['submit'])){
    include_once('conf.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];
   
    
    $result= mysqli_query($conexao, "INSERT INTO atividade(nome,email,telefone,senha,conf_senha) VALUES ('$nome','$email','$telefone','$senha','$conf_senha') ");
    }
    ?>









<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário de Cadastro</title>
<link rel="stylesheet" href="css/cadastro.css">
</head>

<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}

.form-container h2 {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    text-align: left;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
}

button {
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border-radius: 5px;
    border: none;
    background-color: #007bff;
    color: #fff;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>

<body>

<div class="form-container">
  <h2>Cadastro</h2>
  <form id="signupForm" action="cadastro.php" method="post">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="telefone">Telefone:</label>
      <input type="tel" id="telefone" name="telefone" required>
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" id="senha" name="senha" required>
    </div>
    <div class="form-group">
      <label for="confSenha">Confirmar Senha:</label>
      <input type="password" id="confSenha" name="conf_senha" required>
    </div>
    <button type="submit" name="submit">Cadastrar</button>
    ja tem cadastro? <a href="login.php">faça login aqui!</a>

  </form>
</div>

</body>
</html>