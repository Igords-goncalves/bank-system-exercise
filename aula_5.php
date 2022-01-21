<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <pre>
            <?php
                require "Conta.php";

                //$* Instaciando ...

                $conta1 = new Conta;
                $conta1->abrirConta("CC");
                $conta1->gerarNumero(); // Gerar aleatório
                $conta1->setdono("Reinaldo Azevedo Cruz");

                $conta1->depositar(50);
                $conta1->pagarMensalidade();
                $conta1->sacar(188);
                $conta1->fecharConta(); //O status vira negativo
                var_dump($conta1);

                echo "<br><br>";

                $conta2 = new Conta;
                $conta2->abrirConta("CP");
                $conta2->setdono("Igor Gonçalves");
                $conta2->gerarNumero();
                var_dump($conta2);

                echo "<br><br>";

                $conta3 = new Conta;
                $conta3->abrirConta("CC");
                $conta3->setdono("Monique Cunha");
                $conta3->gerarNumero();

                $conta3->fecharConta();
                var_dump($conta3);
            ?>
        </pre>
    </div>
</body>
</html>