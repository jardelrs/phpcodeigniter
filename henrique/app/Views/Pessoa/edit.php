<h1>Edição de Pessoas</h1>

<form action="./update/<?php echo $pessoa["id"]; ?>" method="POST">

    <label for="nome">Nome</label>
    <input type="text" name="nome" value="<?php echo $pessoa["nome"]; ?>" maxlength="200">

    <label for="email">Email</label>
    <input type="text" name="email" value="<?php echo $pessoa["email"]; ?>" maxlength="200">


    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" value="<?php echo $pessoa["telefone"]; ?>" maxlength="15">

    <input type="submit" value="Salvar">

</form>