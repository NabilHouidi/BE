
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    if (isset($_POST)){
        if ($_POST["button"] == "contact"){
            header('Location: ../views/contact.html');
            exit();
            echo "you are heading to contacts";
        }
        if ($_POST["button"]=="index"){
            header('Location: ../views/index.html');
            exit();
        }
        if ($_POST["button"]=="login"){
            header('Location: ../views/pass.html');
            exit();
        }
        if ($_POST["button"]=="add_art"){
            header('Location: ../views/pass.html');
            exit();
        }
        if ($_POST["button"]=="profil"){
            header('Location: ../views/portfolio.html');
            exit();
        }
    }
?>