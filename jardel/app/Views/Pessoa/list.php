<h1>Listagem de pessoa</h1>

<a href="pessoa/new">Cadastrar pessoa</a>
<table>
<tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Telefone</th>
</tr>
<?php foreach ($Dados as $pessoa): ?>
<tr>
    <td><?php echo $pessoa["nome"]; ?></td>
    <td><?php echo $pessoa["email"]; ?></td>
    <td><?php echo $pessoa["telefone"]; ?></td>
</tr>
<?php endforeach; ?>

</table>