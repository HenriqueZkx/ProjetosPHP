<html>
    <head><meta charset="UTF-8">
        <title>Conexão</title>
    </head>

    <body>
        <?php

        try{
            $HOST = "localhost";
            $BANCO = "esp32-mysql";
            $USUARIO = "root";
            $SENHA = "";

            $PDO = new PDO("mysql:host=" . HOST . ";dbname=" . BANCO . ";charset=utf8", $USUARIO, $SENHA);
        } catch(PDOException $erro){
            echo "Erro de conexão: ". $erro->getMessage();
        }
        ?>
     </body>
</html>