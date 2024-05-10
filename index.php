<?php
include 'config.php';
$results = [];

$sql = $pdo->query("SELECT * FROM usuario");
if ($sql->rowCount() > 0) {
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<h1 style="color: blue;">Lista de Usuários</h1>
<div style="margin-bottom: 5px;">
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($results as $result) : ?>
                <tr>
                    <td><?= $result['idusuario']; ?></td>
                    <td><?= $result['nome']; ?></td>
                    <td><?= $result['email']; ?></td>
                    <td>
                        <a href="editar.php?id=<?= $result['idusuario'] ?>"> [Editar] </a> 

                        <a href="excluir.php?id=<?= $result['idusuario'] ?>"> [Excluir] </a>
                    <td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<div>
    <a href="cadastrar.php"><button> Cadastro de Usuario</button></a>
</div>