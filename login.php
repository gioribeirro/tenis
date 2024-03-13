<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="css/login.css">
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

<div class="login-container">
  <form method="POST" action="config.login.php" class="formLogin">
  <h2>Login</h2>
  <form id="loginForm">
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <div class="form-group">
      <input type="submit" name="submit" value="Acessar" class="bnt"/>
    </div>
    <div class="form-group">
      <a href="redefinir_senha.php">Esqueceu sua senha?</a>

    <p>não tem cadastro?<a href="cadastro.php">Faça aqui</a></p>

    </div>
  </form>
</div>

</body>
</html>