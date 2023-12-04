<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Despesas</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <form action="./formulario.php" method="POST">
        <fieldset>
            <legend>Marque as opções que você gasta regurlamente no seu mês:</legend>
          
            <div class="itens">
                <div class="item">
                  <input type="checkbox" class="checkbox" id="casa" name="casa" hidden />
                  <label for="casa">
                        <img src="./img/casa.png" alt="imagem de casa">
                        <p>Casa</p>
                  </label>
                </div>
                <div class="item">
                    <input type="checkbox" class="checkbox" id="carro" name="carro" hidden />
                    <label for="carro">
                        <img src="./img/carro.png" alt="imagem de carro">
                        <p>Carro</p>
                    </label>
                </div>
                <div class="item">
                    <input type="checkbox" class="checkbox" id="educacao" name="educacao" hidden />
                    <label for="educacao">
                        <img src="./img/educacao.png" alt="imagem de casa">
                        <p>Educação</p>
                    </label>
                </div>
                <div class="item">
                    <input type="checkbox" class="checkbox" id="saude" name="saude" hidden />
                    <label for="saude">
                        <img src="./img/saude.png" alt="imagem de saude">
                        <p>Saúde</p>
                    </label>
                </div>
                <div class="item">
                    <input type="checkbox" class="checkbox" id="lazer" name="lazer" hidden/>
                    <label for="lazer">
                        <img src="./img/lazer.png" alt="imagem de lazer">
                        <p>Lazer</p>
                    </label>
                </div>
                <div class="item">
                    <input type="checkbox" class="checkbox" id="seguro" name="seguro" hidden/>
                    <label for="seguro">
                        <img src="./img/seguro.png" alt="imagem de seguro">
                        <p>Seguro</p>
                    </label>
                </div>
            </div>
        </fieldset>
          
        <button>
            Próximo
        </button>
    </form>

    <script src="./style/app.js"></script>
</body>
</html>
