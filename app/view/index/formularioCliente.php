<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/index">
                Voltar
            </a>
        </div>
    </div>
</nav>
<form id="formCliente" method="POST" action="/index/<?php echo ($this->route['view'] == 'alterar')?$this->route['view']."/".$this->route['id']:$this->route['view'];?>">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu Nome" value="<?php echo isset($cliente)?$cliente['nome']:""; ?>">
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF" value="<?php echo isset($cliente)?$cliente['cpf']:""; ?>">
    </div>
    <div class="form-group">
        <label for="data_nascimento">Data de nascimento</label>
        <input type="text" class="form-control" name="data_nascimento" id="data_nascimento" placeholder="Digite sua Data de Nascimento" value="<?php echo isset($cliente)?$cliente['data_nascimento']:""; ?>">
    </div>
    <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite seu CEP" value="<?php echo isset($cliente)?$cliente['cep']:""; ?>">
    </div>  
    <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite seu Endereço" value="<?php echo isset($cliente)?$cliente['endereco']:""; ?>">
    </div>  
    <div class="form-group">
        <label for="bairro">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" placeholder="Digite seu Bairro" value="<?php echo isset($cliente)?$cliente['bairro']:""; ?>">
    </div>  

    <div class="form-group">
        <label for="cpf">Estado</label>
        <select name="estado" class="form-control">
            <option <?php echo isset($cliente)?($cliente['estado'] == "AC")?"selected='true'":"":""; ?> value="AC">Acre</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "AL")?"selected='true'":"":"";  ?> value="AL">Alagoas</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "AP")?"selected='true'":"":"";  ?> value="AP">Amapá</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "AM")?"selected='true'":"":"";  ?> value="AM">Amazonas</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "BA")?"selected='true'":"":""; ?> value="BA">Bahia</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "CE")?"selected='true'":"":""; ?> value="CE">Ceará</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "DF")?"selected='true'":"":""; ?> value="DF">Distrito Federal</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "ES")?"selected='true'":"":""; ?> value="ES">Espírito Santo</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "GO")?"selected='true'":"":""; ?> value="GO">Goiás</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "MA")?"selected='true'":"":""; ?> value="MA">Maranhão</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "MT")?"selected='true'":"":""; ?> value="MT">Mato Grosso</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "MS")?"selected='true'":"":""; ?> value="MS">Mato Grosso do Sul</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "MG")?"selected='true'":"":""; ?> value="MG">Minas Gerais</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "PA")?"selected='true'":"":""; ?> value="PA">Pará</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "PB")?"selected='true'":"":""; ?> value="PB">Paraíba</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "PR")?"selected='true'":"":""; ?> value="PR">Paraná</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "PE")?"selected='true'":"":""; ?> value="PE">Pernambuco</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "PI")?"selected='true'":"":""; ?> value="PI">Piauí</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "RJ")?"selected='true'":"":""; ?> value="RJ">Rio de Janeiro</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "RN")?"selected='true'":"":""; ?> value="RN">Rio Grande do Norte</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "RS")?"selected='true'":"":""; ?> value="RS">Rio Grande do Sul</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "RO")?"selected='true'":"":""; ?> value="RO">Rondônia</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "RR")?"selected='true'":"":""; ?> value="RR">Roraima</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "SC")?"selected='true'":"":""; ?> value="SC">Santa Catarina</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "SP")?"selected='true'":"":""; ?> value="SP">São Paulo</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "SE")?"selected='true'":"":""; ?> value="SE">Sergipe</option>
            <option <?php echo isset($cliente)?($cliente['estado'] == "TO")?"selected='true'":"":""; ?> value="TO">Tocantins</option>
        </select>
    </div>
    <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite sua Cidade" value="<?php echo isset($cliente)?$cliente['cidade']:""; ?>">
    </div> 

    <button type="submit" class="btn btn-default">Enviar</button>
</form>