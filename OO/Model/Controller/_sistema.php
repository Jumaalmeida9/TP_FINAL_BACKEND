<?php

    $estoque = new Estoque();
    
    function criaEstoque(){
        $pdo = new PDO("sqlite:estoque.db");

        $queryCriaTabelaEstoque = "CREATE TABLE IF NOT EXISTS estoque (
            id	INTEGER NOT NULL,
            nome	TEXT NOT NULL,
            PRIMARY KEY(id AUTOINCREMENT)
        )";
                
       
        $pdo->query($queryCriaTabelaCategoria);
    
        $queryCriaTabelaCategoria = "CREATE TABLE IF NOT EXISTS categoria (
            id	INTEGER NOT NULL,
            quantidade	INTEGER NOT NULL,
            produto_id	INTEGER,
            FOREIGN KEY(produto_id) REFERENCES produtos(id),
            PRIMARY KEY(id)
        )";

            function criarTabelaProduto(){

                $pdo = new PDO("sqlite:estoque.db");

                $queryCriaTabelaProdutos = "CREATE TABLE IF NOT EXISTS produtos (
                    id	INTEGER NOT NULL,
                    nome	TEXT NOT NULL,
                    descricao	TEXT,
                    preco	REAL NOT NULL,
                    categoria_id	INTEGER,
                    PRIMARY KEY(id AUTOINCREMENT),
                    FOREIGN KEY(categoria_id) REFERENCES categorias(id)
                )";
            
                $pdo->query($queryCriaTabelaProdutos);

            }

            function inserirProduto($nomeProduto,$descricao,$preco,$categoriaProduto){

                $queryInsereProduto = "INSERT INTO produtos (nome, descricao, preco, categoria_id)
                VALUES (\"".$_GET["nome"]."\",\"".$_GET["descricao"]."\",".$_GET["preco"].",".$_GET["exibir_categorias"].")";

                $pdo = new PDO("sqlite:estoque.db");
                $pdo->query($queryInsereProduto);
            }             
             function inserirCategoria($nomeCategoria){
                    $pdo = new PDO("sqlite:estoque.db");

                    
                
                    $queryInsereCategoria = "INSERT INTO categorias (nome)
                    VALUES (\"".$nomeCategoria."\")";
                
                    $pdo->query($queryInsereCategoria);


             }
            $pdo->query($queryCriaTabelaCategoria);

    }
             function criaProduto($nomeProduto,$categoriaProduto){

    }

            function criaCategoria($nomeCategoria){


    }

?>