
<h1>Listagem de Pessoas</h1>

<a href="pessoa/new">Cadastrar Pessoa</a>

<table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Editar</th>
        <th>Apagar</th>
    </tr>
    
    <?php foreach ($Dados as $pessoa) : ?>
    <tr>
        <td><?php echo $pessoa["nome"]; ?></td>
        <td><?php echo $pessoa["email"]; ?></td>
        <td><?php echo $pessoa["telefone"]; ?></td>
        <td><a href="http://localhost/henrique/public/pessoa/<?php echo $pessoa["id"]; ?>">editar</a></td>
        <td><a href="http://localhost/henrique/public/pessoa/delete/<?php echo $pessoa["id"]; ?>">Apagar</a></td>
    </tr>
    <?php endforeach; ?>
</table>