<?php

function conectarBD(){
    $conexao = mysqli_connect("localhost", "root", "", "jogosblackfriday_p2");
    if(!$conexao){
        die("Erro conexão MySQL: " . mysqli_connect_error());
    }
    return $conexao;
}

function inserirJogo($nome, $_precosempromo, $_precocompromo){
        $conexao = conectarBD();
        $consulta = "INSERT INTO jogosblackfriday (nome, precosempromo, precocompromo)
                    VALUES ('$nome', '$_precosempromo', '$_precocompromo')"; 

        mysqli_query($conexao, $consulta); 
    }

function retornarJogo(){
    $conexao = conectarBD();
    $sql = "SELECT nome, precosempromo, precocompromo FROM jogosblackfriday ORDER BY nome";
    $res = mysqli_query($conexao, $sql);
    return $res;
}

function retornarCliente(){
    $conexao = conectarBD();
    $sql = "SELECT nome, precosempromo, precocompromo FROM jogosblackfriday ORDER BY nome";
    $res = mysqli_query($conexao, $sql);
    return $res;
}

?>


 