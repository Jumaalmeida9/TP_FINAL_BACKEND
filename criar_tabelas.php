<?php
    $pdo = new PDO("sqlite:estoque.db");

    $queryCriaTabelaCategorias = "CREATE TABLE IF NOT EXISTS categorias (
        id	INTEGER NOT NULL,
        Nome	TEXT NOT NULL,
        PRIMARY KEY(id AUTOINCREMENT)
    )";
       
    $pdo->query($queryCriaTabelaCategorias);

    $queryCriaTabelaProdutos = "CREATE TABLE IF NOT EXISTS produtos (
        id	INTEGER NOT NULL,
        Nome	TEXT NOT NULL,
        Descrição	TEXT,
        Preço	REAL NOT NULL,
        Categoria_id	INTEGER,
        PRIMARY KEY(id AUTOINCREMENT),
        FOREIGN KEY(Categoria_id) REFERENCES categorias(id)
    )";

    $pdo->query($queryCriaTabelaProdutos);

    $queryCriaTabelaEstoque = "CREATE TABLE IF NOT EXISTS estoque (
        id	INTEGER NOT NULL,
        Quantidade	INTEGER NOT NULL,
        produto_id	INTEGER,
        FOREIGN KEY(produto_id) REFERENCES produtos(id),
        PRIMARY KEY(id)
    )";

    $pdo->query($queryCriaTabelaEstoque);



?>