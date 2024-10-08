<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danygor Control Stock | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Grey+Qo&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/logo_Danygor.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/styleLogin.css">
</head>

<body>
    <header>
        <div class="logo"><a href="../code/home.html"><img src="../assets/logos/logo_Danygor.png" alt="logo"></a></div>
        <h1>Danygor Stock</h1>
    </header>

    <main>
        <div class="container">
            <div class="main_info">
                <img src="../assets/logos/logoRH.png" alt="logo-red house" class="logo-RH">
                <h2>Controle de Estoque</h2>
                <h1>Acesso à</h1>
                <span>Plataforma</span>
                <p>Realize o acesso a sua conta. Caso não tenha cadastro, entre em contato com a administração.</p>
            </div>
            <!-- Formulário de login principal. -->
            <div class="form">
                <h1>Login</h1>
                <form action="../backend/testeLogin.php" method="post">
                    <label id="labelUsu">Usuário</label>
                    <input type="text" class="usu" id="usu" name="usu"> <br>
                    <label id="labelpassW">Senha</label>
                    <input type="password" name="passW" id="passW">
                    <!-- <p class="erroSenha"> Dados incorretos. Tente novamente.</p> -->
                    <input type="submit" name="send" id="sendBtn" value="Acessar">
                    <p>Novo funcionário? <a href="createLogin.php">Clique aqui</a></p>
                </form>
            </div>
        </div>
    </main>
    <script src="../scripts/script.js"></script>
</body>

</html>