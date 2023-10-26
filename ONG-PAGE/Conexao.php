<?php 
 $localhost = "localhost";
 $user = "root";
 $passw = "";
 $banco = "ong-esportivo";

 try{
    // <-- USANDO METODO MYSQLI -->
 // $conecta = mysqli_connect($localhost, $user, $passw, $banco);
 //$sql = mysqli_query($conecta, "SELECT * FROM usuarios");

   // <-- USANDO METODO PDO -->
 $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch(Exception $e){
    echo "ERRO: ". $e->getMessage();
    exit;
}


  ?>