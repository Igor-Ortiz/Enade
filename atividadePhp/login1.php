<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="stylesheet" href="stylemenu.css"> 
    <script src="https://kit.fontawesome.com/cf6fa412bd.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="menu"> 
        <nav>
            <ul>
                <li><a href="index.html">Página Inicial</a></li>
                <li><a href="#">Provas</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        header("Location: index.html");
        exit;
    }
    ?>

    <div class="container">
        <div class="buttonsForm">
            <div class="btnColor"></div>
            <button id="btnSignin">Login</button>
            <button id="btnSignup">Cadastro</button>
        </div>

        <form id="signin" method="post">
            <input type="text" name="username" placeholder="Email" required />
            <i class="fas fa-envelope iEmail"></i>
            <input type="password" name="password" placeholder="senha" required />
            <i class="fas fa-lock iPassword"></i>
            <div class="divCheck">
                <input type="checkbox" />
                <span>Lembre de mim</span>
            </div>
            <button type="submit">Login</button>
        </form>

        <form id="signup">
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
        </form>
    </div>

    <script src="jslogin.js"></script>
</body>
</html>
