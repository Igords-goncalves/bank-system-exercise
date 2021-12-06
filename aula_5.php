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

        $conta1 = new Conta;
        $conta1->abrirConta("CC");
        $conta1->gerarNumero(); // Quero gerando aleatório
        $conta1->setdono("Reinaldo Azevedo Cruz");

        $conta1->depositar(50);
        $conta1->pagarMensalidade();
        $conta1->sacar(188);
        $conta1->fecharConta(); //O status vira negativo
        print_r($conta1);

        $conta2 = new Conta;
        $conta2->abrirConta("CP");
        $conta2->setdono("Igor Gonçalves");
        $conta2->gerarNumero();
        print_r($conta2);

        $conta3 = new Conta;
        $conta3->abrirConta("CC");
        $conta3->setdono("Monique Cunha");
        $conta3->gerarNumero();
        print_r($conta3);
    ?>
    </pre>
</body>
</html>