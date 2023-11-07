<?php 
require 'Conexao.php';
if(isset($_SESSION["idUser"])&& !empty($_SESSION["idUser"])){
    require_once "UsuarioClass.php";
    $u = new Usuario;

    $listuser = $u->logged($_SESSION["idUser"]);
    $NomeUser = $listuser["Nome"];
    $SobrenomeUser = $listuser["Sobrenome"];
}else{

    header("Location PaginaInicial.html");
}

;
?>