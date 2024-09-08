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
    <link rel="shortcut icon" href="../ascets/logo_Danygor.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/styleLogin.css">
    <link rel="stylesheet" href="../styles/styleCreateLogin.css">
</head>

<body>
    <header>
        <div class="logo"><a href="../code/home.html"><img src="../assets/logos/logo_Danygor.png" alt="logo"></a></div>
        <h1>Danygor Stock</h1>
    </header>

    <main>
        <div class="container">
            <!-- <h1>Criar conta</h1> -->
            <!-- Formulário de login principal. -->
            <div class="form">
                <div class="logo-redhouse">
                    <img src="../assets/logos/logoRH.png" alt="logo-RH" class="logoRH">
                    <h1>Red House</h1>
                </div>
                <form action="createLogin.php" method="post">
                    <label for="">Nome*</label>
                    <input type="text" name="nome" id="nome" required> <br>
                    <label for="">E-mail*</label>
                    <input type="email" name="email" id="email" required> <br>
                    <label for="">Usuário*</label>
                    <input type="text" name="usu" id="usu" required> <br>
                    <label for="">Senha*</label>
                    <input type="password" name="passW" id="passW" placeholder="8 digitos" maxlength="8" required>
                    <input type="submit" name="send" id="sendBtn" value="Criar">
                    <?php
                    //Verificando se esta recebendo todos os parâmetros
                    //if(isset($_POST['send'])){

                    //     print_r($_POST['nome']);
                    //     print_r('<br>');
                    //     print_r($_POST['email']);
                    //     print_r('<br>');
                    //     print_r($_POST['usu']);
                    //     print_r('<br>');
                    //     print_r($_POST['passW']);
                    // 

                        //include_once('../backend/config.php'); //Incluido conexão

                    //Criando variaveis:
                        //$nome = $_POST['nome'];
                        //$email = $_POST['email'];
                        //$user = $_POST['usu'];
                        //$pw = $_POST['passW'];
                    //------------------

                        //$result = mysqli_query($conexao, "INSERT INTO signup(name,mail,user,pw) VALUES ('$nome','$email','$user','$pw')"); //query de insert

                //}

                    include("../backend/config.php");
                    if(isset($_POST['send'])){
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $user = $_POST['usu'];
                        $pw = $_POST['passW'];
                    
                    //Verificando se o e-mail já foi utilizado

                    $verify_query = mysqli_query($conexao, "SELECT mail FROM signup WHERE mail='$email'");
                    
                    if(mysqli_num_rows($verify_query) !=0 ){
                        echo "<div class= 'message'>
                                <p>Esse e-mail já esta sendo usado, tente outro por favor!</p>
                            </div> <br>";
                    }else{
                        echo "<div class= 'message'>
                                <p>Cadastro realizado com sucesso!</p>
                            </div> <br>";
                    }
                    }
                ?>
                    <p>Já possui conta? <a href="login.php">Clique aqui</a></p>
                </form>
            </div>
        </div>
    </main>
    <script src="../scripts/script.js"></script>
</body>

</html>