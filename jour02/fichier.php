<?php 

if(isset($_POST["envoyé"])){

    // récupérer les données 
    [
        "nom" => $nom ,
        "message" => $message,
        "email" => $email
    ] = $_POST ;

    // vérification 
    $verif = [];
    if(strlen($message) < 10){
        $verif[] = "nb caractère message est trop faible !!" ;
    }

    
    if(count($verif) === 0 ){
        mail("", "", "");
        // INSERT INTO ....
    }
}