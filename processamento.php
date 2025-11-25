<?php

session_start();
require "funcoesBD.php";

if(!empty($_POST['nome']) && !empty($_POST['precosempromo']) && !empty($_POST['precocompromo'])){
    
    $nome = $_POST['nome'];
    $precosempromo = $_POST['precosempromo'];
    $precocompromo = $_POST['precocompromo'];
    

    inserirJogo($nome, $precosempromo, $precocompromo);
    
    header('location:cadastrojogos.php');
    die();
}

?>










