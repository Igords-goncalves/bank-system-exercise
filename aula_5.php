<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            height: 50vh;
            background-color: #282a36;
            color: #fff;
            font-size: 1.5rem;
        }

    </style>
    <title>Conta Bancária</title>
</head>
<body>
    <pre>
    <?php
        require "Conta.php";

        // Instaciando ...

        $reinaldo = new Conta;
        $reinaldo->abrirConta();
        $reinaldo->numeroDaConta = 4587;
        $reinaldo->setTipo("CP");
        $reinaldo->setdono("Reinaldo Azevedo Cruz");

        print_r($reinaldo);


    ?>
    </pre>
</body>
</html>