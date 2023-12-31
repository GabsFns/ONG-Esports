<?php 

class Usuario{

    public function login($Email, $senha){
        global $pdo;

        $sql = "SELECT * FROM usuarios WHERE Email = :Email AND senha = :senha";
        //acesso a tabela usuarios
        $sql = $pdo->prepare($sql);
        $sql->bindValue("Email", $Email);
        $sql->bindValue("senha", $senha);
        $sql->execute();
       
        if($sql->rowCount() > 0){
                     //validação dos dados se eles existem
                     //--rowCount--: contar registro
            $dado = $sql->fetch();
                    //se existir ele vai acessr os dados do usuario
                    //--fetch--: buscar
            $_SESSION["idUser"] = $dado["id"];
                    //gravação de dado na sessão "ID"
                    //é um array que armazena as informações da sessão,permite o acesso ao seu conteúdo
            return true;
        }else{
            
            return false;
        }
    }

    public function logged($id){
        global $pdo;

        $array = array();

        $id = $_SESSION['idUser'];


        $sql = "SELECT Nome, Sobrenome FROM usuarios WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindParam("id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;


    }

    
}


?>