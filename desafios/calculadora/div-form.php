<?php

$divForm = [
    "casa"=>
    '<div class="form">
        <h1>Casa</h1>

        <label for="aluguel">Prestação/Aluguel</label>
        <input type="number" placeholder="0.00" id="aluguel" name="aluguel_casa" ><br>

        <label for="electricidade">Electricidade</label>
        <input type="number" placeholder="0.00" id="electricidade" name="electricidade_casa"><br>

        <label for="agua">Água</label>
        <input type="number" placeholder="0.00" id="agua" name="agua_casa"><br>

        <label for="internet">Internet</label>
        <input type="number" placeholder="0.00" id="internet" name="internet_casa"><br>

        <label for="supermercado">Supermercado</label>
        <input type="number" placeholder="0.00" id="supermercado" name="supermercado_casa"><br>

        <label for="empregada">Empregada</label>
        <input type="number" placeholder="0.00" id="empregada" name="empregada_casa"><br>

        <label for="outros">Outros</label>
        <input type="number" placeholder="0.00" id="outros" name="outros_casa"><br>
    </div>',

    'carro'=>'
    <div class="form">
        <h1>Carro</h1>

        <label for="aluguel">Prestação</label>
        <input type="number" placeholder="0.00" id="aluguel" name="aluguel_carro"><br>

        <label for="combustível">Combustível</label>
        <input type="number" placeholder="0.00" id="combustível" name="combustível_carro"><br>

        <label for="manutencao">Manutenção</label>
        <input type="number" placeholder="0.00" id="manutencao" name="manutencao_carro"><br>

        <label for="estacionamento">Estacionamento</label>
        <input type="number" placeholder="0.00" id="estacionamento" name="estacionamento_carro"><br>
    </div>',

    'educacao'=>'
    <div class="form">
        <h1>Educação</h1>

        <label for="mensalidade">Propinas/Mensalidade</label>
        <input type="number" placeholder="0.00" id="mensalidade" name="mensalidade_educacao"><br>

        <label for="material">Material</label>
        <input type="number" placeholder="0.00" id="material" name="material_educacao"><br>

        <label for="livros">Livros</label>
        <input type="number" placeholder="0.00" id="livros" name="livros_educacao"><br>

        <label for="extra-curric">Activ. extra-curric.</label>
        <input type="number" placeholder="0.00" id="extra-curric" name="extra-curric_educacao"><br>

    </div>',

    'saude'=> 
    '<div class="form">
        <h1>Saúde</h1>

        <label for="consultas">Consultas</label>
        <input type="number" placeholder="0.00" id="consultas" name="consultas_saude"><br>

        <label for="medicamentos">Medicamentos</label>
        <input type="number" placeholder="0.00" id="medicamentos" name="medicamentos_saude"><br>

        <label for="tratamentos">Tratamentos</label>
        <input type="number" placeholder="0.00" id="tratamentos" name="tratamentos_saude"><br>

        <label for="exames">Exames/análises</label>
        <input type="number" placeholder="0.00" id="exames" name="exames_saude"><br>

        <label for="hospitalizacoes">Hospitalizações</label>
        <input type="number" placeholder="0.00" id="hospitalizacoes" name="hospitalizacoes_saude"><br>
    </div>',

    'lazer'=>'
    <div class="form">
        <h1>Lazer</h1>

        <label for="livros">Livros</label>
        <input type="number" placeholder="0.00" id="livros" name="livros_lazer"><br>

        <label for="comer">Comer fora</label>
        <input type="number" placeholder="0.00" id="comer" name="comer_lazer"><br>

        <label for="fins-de-semana">Fins de semana</label>
        <input type="number" placeholder="0.00" id="fins-de-semana" name="fins-de-semana_lazer"><br>

        <label for="viagens">Férias/viagens</label>
        <input type="number" placeholder="0.00" id="viagens" name="viagens_lazer"><br>

        <label for="museus">Espectác./museus</label>
        <input type="number" placeholder="0.00" id="museus" name="museus_lazer"><br>

        <label for="outros">Outros</label>
        <input type="number" placeholder="0.00" id="outros" name="outros_lazer"><br>
    </div>',

    'seguros'=>'
    <div class="form">
        <h1>Seguro</h1>
    
        <label for="casa">Casa</label>
        <input type="number" placeholder="0.00" id="casa" name="casa_seguros"><br>
    
        <label for="carro">Carro</label>
        <input type="number" placeholder="0.00" id="carro" name="carro_seguros"><br>
    
        <label for="saude">Saúde</label>
        <input type="number" placeholder="0.00" id="saude" name="saude_seguros"><br>
    
        <label for="vida">Vida</label>
        <input type="number" placeholder="0.00" id="vida" name="vida_seguros"><br>
    
        <label for="outros">Outros</label>
        <input type="number" placeholder="0.00" id="outros" name="outros_seguros"><br>
    </div>',

    'outros'=>'
    <div class="form" id="ultimo" name="ultimo">
        <h1>Outros</h1>
    
        <label for="cabeleireiro">Cabeleireiro</label>
        <input type="number" placeholder="0.00" id="cabeleireiro" name="cabeleireiro_outros"><br>
    
        <label for="cartoes">Cartões de crédito</label>
        <input type="number" placeholder="0.00" id="cartoes" name="cartoes_outros"><br>
    
        <label for="estetica">Estética</label>
        <input type="number" placeholder="0.00" id="estetica" name="estetica_outros"><br>
    
        <label for="transportes">Transportes</label>
        <input type="number" placeholder="0.00" id="transportes" name="transportes_outros"><br>
    
        <label for="outros">Outros</label>
        <input type="number" placeholder="0.00" id="outros" name="outros_outros"><br>
    </div>',

    'receita'=>'
    <div class="form" id="ultimo" name="ultimo">
        <h1>Receita</h1>
    
        <label for="salarios">Salários</label>
        <input type="number" placeholder="0.00" id="salarios" name="salarios_receita"><br>
    
        <label for="bolsas">Incentivos/bolsas</label>
        <input type="number" placeholder="0.00" id="bolsas" name="bolsas_receita"><br>
    
        <label for="investimento">Retorno investimento</label>
        <input type="number" placeholder="0.00" id="investimento" name="investimento_receita"><br>
    
        <label for="outros">Outros</label>
        <input type="number" placeholder="0.00" id="outros" name="outros_receita"><br>
    </div>',
];

return $divForm;
?>
