<?php
include "cnx.php";

if(isset($_GET["Nom"]) && isset($_GET["Prénom"]) && isset($_GET["Mail"]) && isset($_GET["password"]) && isset($_GET["Sexe"]));   

{
    $nom= $_GET["Nom"];
    $prenom= $_GET["Prénom"];
    $mail= $_GET["Mail"];
    $password= $_GET["password"];
    $sexe= $_GET["Sexe"];

    $req= mysqli_query($link, "INSERT INTO users (Nom,Prénom,Mail,password,Sexe) values ('$nom','$prenom','$mail','$password','$sexe')");
    $res=mysqli_query($link,$req);

    if($req)
    {
        echo "insertion effectuée";
    }

    else

    {
        echo "erreur d'insertion";
    }
}

?>