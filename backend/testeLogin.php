<?php
    session_start();

    //print_r($_REQUEST); //Teste para ver ser os parametros estão chegando corretos

    if(isset($_POST['send']) && !empty($_POST['usu']) && !empty($_POST['passW']))
    {
        //Acessar sistema

        include_once('config.php');

        $user = $_POST['usu'];
        $pw = $_POST['passW'];

        // print_r('Usuário: ' . $user);
        // print_r('<br>');
        // print_r('Senha: ' .$pw);

        //Verificando se parametros existem lá no sql
        $sql = "SELECT * FROM signup WHERE user = '$user' and pw = '$pw'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        $errors = array();

        if(mysqli_num_rows($result)< 1){
            // print_r('Usuário/senha incorreto');

            // Aqui estamos destruindo os dados
            unset($_SESSION['usu']);  
            unset($_SESSION['passW']);
            header('Location: ../code/login.php');

            

        }else{
            $_SESSION['usu'] = $user;
            $_SESSION['passW'] = $pw;
            header('Location: ../code/homePage.php');

        }

    }else{
        //Não acessa

        header('Location: ../code/login.php');
    }
?>

