    <html>

        <head>
            <title>Iniciar Estoque</title>
        </head>
        <body>
            <form action="iniciar_estoque.php" method="get">
                <select name="exibir_produtos">
                            <?php

                            $pdo = new PDO("sqlite:estoque.db");

                            $query_select_produtos = "SELECT * FROM produtos";
                            $produtos = $pdo->query($query_select_produtos);
                            foreach ($produtos as $produto) {

                
                                
                            echo "<option value=\"".$produto["id"]."\">".$produto["nome"]."</option>"; 

                            }

                            ?>
                    
                </select><br><br>

                <label for= "quantidade">Qtdo.:</label>
                <input type= "number" name= "quantidade">
                <button type="submit">Enviar</button>

            </form>
        </body>
    </html>