<?php 
    session_start();
    $resultado = $_SESSION['resultado'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resulltado</title>
    <link rel="stylesheet" href="./style/resultado.css">
</head>
<body>
    <section>

        <div class="info">
            <h1>Saldos</h1>
            <?php
                echo "
                <table>
                    <tr id='TRreceita'>
                        <td>
                            Receita Total
                        </td>
                        <td>
                            ". 'R$'."{$resultado['receita']}
                        </td>
                    </tr>

                    <tr id='TRgastos'>
                        <td>
                            Gastos Totais
                        </td>

                        <td>
                            ". 'R$'."{$resultado['gastos']}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Saldo
                        </td>
                        
                        <td>
                            ". 'R$'."{$resultado['total']}
                        </td>
                    </tr>
                </table>";
            ?>
        </div>

    </section>

    <div id="detalhes-receita">
        <table>
            <tbody>
                <?php 
                    foreach ($resultado['listaReceita'] as $categoria => $valor) {
                        echo "
                        <tr>
                            <td>{$categoria}</td>
                            <td>". 'R$'."{$valor}</td>
                        </tr>
                        ";
                    }

                ?>
            </tbody>
        </table>
        <button class="button-close">close</button>
    </div>

    <div id="detalhes-gastos">
        <table>
            <tbody>
                <?php 
                    foreach ($resultado['listaGastos'] as $categoria => $valor) {
                        echo "
                        <tr>
                            <td>{$categoria}</td>
                            <td>". 'R$'."{$valor}</td>
                        </tr>
                        ";
                    }

                ?>
            </tbody>
        </table><br>
        <button class="button-close">close</button>
    </div>
    
    <script src="./style/resultado.js"></script>
</body>
</html>
