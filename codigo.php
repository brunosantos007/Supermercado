<?php

session_start();

    include_once("conexao.php");

    if(isset($_GET)){

        $query = "SELECT * FROM produtos";
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    if(!empty($_GET["edit"])){

        $id = $_GET["id"];
        $query = "SELECT * FROM produtos WHERE id = :id";

        $stmt = $conexao->prepare($query);
        $stmt->bindParam(":id",$id);
        $stmt->execute();

        $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    if(isset($_GET["del"])){

            $idDel = $_GET["id"];
            $query = "DELETE FROM produtos WHERE id = :id";
    
            $stmt = $conexao->prepare($query);
            $stmt->bindParam(":id",$idDel);
            $stmt->execute();

            echo "Excluido com sucesso. <a href='index.php'>Voltar</a>";
            echo $_GET["id"];
    }
     
     if(!empty($_POST)){

            $idProduto = $_POST["id"];
            $nome = $_POST["nome"];
            $descricao = $_POST["descricao"];
            $estoque = $_POST["estoque"];
            $valor = $_POST["valor"];


         if(isset($_POST["atualizar"])){

             $query = "UPDATE produtos SET nome = :nome , descricao = :descricao , estoque = :estoque , valor = :valor WHERE id = :id";
             $stmt = $conexao->prepare($query);
             $stmt->bindParam(":nome",$nome);
             $stmt->bindParam(":descricao",$descricao);
             $stmt->bindParam(":estoque",$estoque);
             $stmt->bindParam(":valor",$valor);
             $stmt->bindParam(":id",$idProduto);
             $stmt->execute();

             header("Location: index.php");

        }elseif(isset($_POST["inserir"])){
        
            $query = "INSERT INTO produtos (nome, descricao, estoque, valor)
            VALUES (:nome, :descricao, :estoque, :valor)";

             $stmt = $conexao->prepare($query);
             $stmt->bindParam(":nome",$nome);
             $stmt->bindParam(":descricao",$descricao);
             $stmt->bindParam(":estoque",$estoque);
             $stmt->bindParam(":valor",$valor);
             
             $stmt->execute();

            header("Location: index.php");
        }

     }


    
?>