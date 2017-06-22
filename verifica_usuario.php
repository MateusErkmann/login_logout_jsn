<?php
    session_start();

    function login(){
        $usuarios = file_get_contents('usuarios.json');
        $usuarios = json_decode($usuarios, true);


        foreach ($usuarios as $usuario) {
            if ($_POST['login'] == $usuario['login'] && $_POST['senha'] == $usuario['senha']){

                $fez_login = true;
                $_SESSION['usuario_online'] = true;
                $_SESSION['nome'] = $_POST['nome'];
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['senha'] = $_POST['senha'];

                header('Location: index.php');
            }

            }

            if ($fez_login == false){
                header("Location: login.php");
            }
        }

        function sair(){
        session_destroy();
        header('Location: login.php');
        }

        //ROTAS

        if ($_GET['acao'] == 'login'){
            login();
        }

        elseif ($_GET['acao'] == 'sair'){
            sair();
        }


