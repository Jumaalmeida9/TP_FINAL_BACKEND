<html>
    <head>
            <meta charset="UTF-8">
            <title>Inserir Produtos</title>
    </head>
        <body>

           
            <form action="inserir_produtos.php" method="get">

                <label for="nome">Nome:</label>
                <input type="text" name="nome"></br></br>

                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao"></br></br>

                <label for="preco">Preço:</label>
                <input type="text" name="preco"></br></br>

                <select name="exibir_categorias">
                    <?php

                    $pdo = new PDO("sqlite:estoque.db");

                    $query_select_categorias = "SELECT * FROM categorias";
                    $categorias = $pdo->query
                    ($query_select_categorias);
                    foreach ($categorias as $categoria) {

        
                        
                     echo "<options values=\"".$categoria["id"]."\">".$categoria["nome"]."</option>"; 


                    }
                    ?>
                    <!--option value="1">Arroz</option-->
            </select>

                    <button type="submit">Enviar</button>
            
            </form>
        </body>
</html>