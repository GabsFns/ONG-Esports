<?php 
if(isset($_POST["Email"]) && !empty($_POST["Email"]) && isset($_POST["senha"]) && !empty($_POST["senha"])){

    require "Conexao.php";
    require "UsuarioClass.php";

 $user = new Usuario;


 $Email  = addslashes($_POST["Email"]);
 $senha  = addslashes($_POST["senha"]);

 if($user->login($Email, $senha) == true ){
    if(isset($_SESSION["idUser"])){
        header("Location: indexUser.php");
    }else{
        header("Location: loginUser.php");
    }
 
}else{

    header("Location: loginUser.php");

}
}
?>