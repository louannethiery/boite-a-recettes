<?php
require("database.php");

if( empty($_POST["pseudo"])){
    $message = "Merci de renseigner un pseudo";
    header("Location: ../login.php?message=$message");
}

if( !empty($_POST["pseudo"])){
    $req = $db->prepare("SELECT * FROM users_recettes WHERE pseudo = :pseudo");
    $req->bindParam(":pseudo", $_POST["pseudo"]);
    $req->execute();

    $result = $req->fetch(PDO::FETCH_ASSOC);
    if($result == false){
        $message = "Votre compte est existant";
        header("Location: ../login.php?message=$message");
    }else{
        session_start();
        $pseudo =  $_POST["pseudo"];
        header("Location: ../recettes.php?pseudo=$pseudo");
    }
}