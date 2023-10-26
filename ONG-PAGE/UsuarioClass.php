<?php 

class Usuario{

    public function login($Email, $senha){
        global $pdo;
        $sql= "SELECT * FROM usuario WHERE Email = :Email AND = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("Email", $Email);
        $sql->bindValue("senha", $senha);
        $sql->execute();
    }

}

?>