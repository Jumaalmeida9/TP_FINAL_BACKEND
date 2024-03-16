<?php
    echo $_GET["quantidade"];
    echo $_GET["exibir_produtos"];

    $queryIniciaEstoque = "INSERT INTO estoque(quantidade, produto_id)
    VALUES (".$_GET["quantidade"].",".$_GET["exibir_produtos"].")";

    $pdo = new PDO("sqlite:estoque.db");
    $pdo->query($queryIniciaEstoque);


?>