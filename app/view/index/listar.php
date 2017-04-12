<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php?op=inserir">
                Novo
            </a>
        </div>
    </div>
</nav>
<table class="table">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>cpf</th>
        <th>data de nascimento</th>
        <th>endereço</th>
        <th>bairro</th>
        <th>cep</th>
        <th>cidade</th>
        <th>estado</th>
        <th>-</th>
    </tr>
    <?php foreach ($clientes as $value) : ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['nome']; ?></td>
            <td><?php echo $value['cpf']; ?></td>
            <td>
                <?php
                $data_nascimento = date_create($value['data_nascimento']);
                echo date_format($data_nascimento, 'd/m/Y');
                ?>
            </td>
            <td><?php echo $value['endereco']; ?></td>
            <td><?php echo $value['bairro']; ?></td>
            <td><?php echo $value['cep']; ?></td>
            <td><?php echo $value['cidade']; ?></td>
            <td><?php echo $value['estado']; ?></td>
            <td>
                <a href="index.php?op=alterar&id=<?php echo $value['id'] ?>">Alterar</a>
                <a href="index.php?op=deletar&id=<?php echo $value['id'] ?>">Deletar</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>