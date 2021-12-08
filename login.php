<?php session_start()?>
<?php
    
    if(!isset($_SESSION['login'])){
        if(isset($_POST['acao'])){
            $login = "lenilson";
            $senha = "lucas123";

            $loginform = $_POST['login'];
            $senhaform = $_POST['senha'];

            if($login == $loginform && $senha == $senhaform){
                $_SESSION['login'] = $login;
                header('location: index.php');
            }else{
                echo 'dados invalidos';
            }

        }
        include('index.php');
    }else{
        include('home.php');
    }
    
    ?>