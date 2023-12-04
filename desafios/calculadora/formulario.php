<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Despesas</title>
    <link rel="stylesheet" href="./style/form.css">
</head>
<body>
    <section>
        <form action="calcular.php" method="POST">
            <?php
                $htmlDespesas = require_once("./div-form.php");
                $itens = array_keys($_POST);
                array_push($itens,"outros");
                array_push($itens,"receita");
                $form = "";
                foreach ($itens as $itens) {
                    $form .= $htmlDespesas[$itens];
                }
                echo $form;
            ?>

            <button id="enviar">
                Calcular
            </button>
        </form>
                
        <div class="botoes">
                <button class="voltar">
                    <img src="./img/seta.png" alt="voltar" id="voltar">
                </button>
                <button>
                    <img src="./img/seta.png" alt="avançar" style="transform: rotate(180deg);" id="avancar">
                </button>
        </div>
    </section>

    <script src="./style/form.js"></script>
</body>
</html>