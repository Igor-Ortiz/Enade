<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: index.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="stylelogin.css">
  <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="buttonsForm">
      <div class="btnColor"></div>
      <button id="btnSignin">Login</button>
      <button id="btnSignup">Cadastro</button>
    </div>

    <form id="signin" action="" method="POST">
      <input type="text" placeholder="Email" name="email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" placeholder="senha" name="senha" required />
      <i class="fas fa-lock iPassword"></i>
      <!-- <div class="divCheck">
        <input type="checkbox" />
        <span>Lembre de mim</span>
      </div> -->
      <button type="submit">Login</button>
    </form>

    <!-- <form id="signup">
      <input type="text" placeholder="Email" required />
      <i class="fas fa-envelope iEmail"></i>
      <input type="password" placeholder="senha" required />
      <i class="fas fa-lock iPassword"></i>
      <input type="password" placeholder="senha" required />
      <i class="fas fa-lock iPassword2"></i>
      <div class="divCheck">
        <input type="checkbox" required />
        <span>Termos</span>
      </div>
      <button type="submit">Registrar</button>
    </form> -->
  </div>

  <script src="jslogin.js"></script>
</body>
</html>