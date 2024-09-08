<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['usu']) == true) and (!isset($_SESSION['passW']) == true)){
        unset($_SESSION['usu']);
        unset($_SESSION['passW']);
        header('Location: ../code/login.php');
    }
     $logado = $_SESSION['usu'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial | Danygor</title>
    <!-- Font Open Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/styleHomePage.css">
    <link rel="shortcut icon" href="../assets/logo_Danygor.png" type="image/x-icon">
</head>

<body>
    <header>
        <div class="header-logo"><a href="../code/homePage.html"><img
                    src="../assets/logos/Logo 4_Prancheta 1 cópia 3.png" alt="logo redhouse"></a></div>
        <nav id="menuDesk">
            <ul id="menuDesk-ul">
                <li>
                    <a href="../code/inventario.html">
                        Inventário
                        <span id="seta-icon"><img src="../assets/icons/seta-direita.svg" alt="seta"></span>
                    </a>
                    <ul id="inventario-sub-menu">
                        <li>
                            <a href="#">Material Didático</a>
                        </li>
                        <li>
                            <a href="#">Mobilia</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="../code/cadastrar.html">
                        Adicionar novo
                    </a>
                </li>
                <li>
                    <a href="#">
                        Relatórios
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        Opção 4
                    </a>
                </li> -->

            </ul>
        </nav>
        <div class="account">
            <p><?php echo "<div class= teste>$logado</div>";?></p>
            <p><span>Estoquista</span></p>
            <span id="seta-icon"><img src="../assets/icons/seta-direita.svg" alt="seta"></span>

            <div id="submenu">
                <ul>
                    <li>
                        <a href="#">
                            Configurações
                        </a>
                    </li>
                    <li>
                        <a href="../backend/sair.php">
                            Sair
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Ajuda
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="logo-menu" id="showMenu">
            <img src="../assets/icons/menu-icon.svg" alt="menu-icon">
        </div>

        <div id="menuMobile">
            <div class="icon-close" id="icon-close">
                <img src="../assets/icons/close-icon.svg" alt="closebuton">
            </div>
            <ul>
                <li>
                    <a href="#">
                        Produtos
                    </a>
                </li>
                <li>
                    <a href="#">
                        Adicionar novo
                    </a>
                </li>
                <li>
                    <a href="#">
                        Relatórios
                    </a>
                </li>
                <li>
                    <a href="#">
                        Configurações
                    </a>
                </li>
                <li>
                    <a href="#">
                        Sair
                    </a>
                </li>
                <li>
                    <a href="#">
                        Ajuda
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <!-- main -->
    <main>
        <div class="caixa">
            <div class="caixa-img">
                <img src="../assets/icons/estoque.png" alt="estoque-icon">
                <p>Verificar quantidade de itens em estoque</p>
            </div>
            <div class="caixa-text">
                <ul>
                    <li>
                        <img src="../assets/icons/seta.svg" alt="icon">
                        Materiais Didáticos
                    </li>
                    <li>
                        <img src="../assets/icons/seta.svg" alt="icon">
                        Mobilia Escolar
                    </li>
                </ul>
            </div>
            <div class="btn">
                <button id="btn-caixa">
                    <a href="../code/inventario.html">Acessar</a>
                </button>
            </div>
        </div>

        <div class="caixa">
            <div class="caixa-img">
                <img src="../assets/icons/cadastrar.png" alt="cadastrar">
                <p>Adicionar novo item ao estoque</p>
            </div>
            <div class="caixa-text">
                <ul>
                    <li>
                        <img src="../assets/icons/seta.svg" alt="icon">
                        Adicionar Kits de materiais
                    </li>
                    <li>
                        <img src="../assets/icons/seta.svg" alt="icon">
                        Adicionar nova Mobilia
                    </li>
                </ul>
            </div>
            <div class="btn">
                <button id="btn-caixa">
                    <a href="../code/cadastrar.html">Acessar</a>
                </button>
            </div>
        </div>

        <div class="caixa">
            <div class="caixa-img">
                <img src="../assets/icons/report.png" alt="estoque-icon">
                <p>Relatório de entradas e saídas</p>
            </div>
            <div class="caixa-text">
                <ul>
                    <li>
                        <img src="../assets/icons/seta.svg" alt="icon">
                        Ultimas saídas
                    </li>
                </ul>
            </div>
            <div class="btn">
                <button id="btn-caixa">
                    <a href="../code/relatorios.html">Acessar</a>
                </button>
            </div>
        </div>
    </main>

    <!-- <footer>
        <img src="../assets/logos/logo_Danygor.png" alt="lgodanigor"> 
        <p>Danygor © 2024. Todos os direitos reservados.</p>
    </footer> -->
    <script src="../scripts/scriptHomePage.js"></script>
</body>

</html>