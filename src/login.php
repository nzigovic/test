<?php

if( !isset($_POST["username"]) ||  !isset($_POST["password"])){
    die ("Nije unet administrator");
};




$username = strtolower($_POST["username"]);
$sifra = $_POST["password"];


if($username == "admin" && $sifra == "1234"){
    echo '<script> alert("Dobrodosao admine")</script> ';
}else {
    echo "Neuspesna registracija";
};