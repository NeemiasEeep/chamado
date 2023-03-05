<html>
<?php
include '../assets/head.php';
include '../prog/conexao.php';
$sql = "SELECT * FROM tb_chamados";
$result = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="../style.css">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="listar_chamados.php">Secretaria de Saúde</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse a" id="navbarNav">
            <ul class="navbar-nav ml-auto a">
                <li class="nav-item a">
                    <a class="nav-link text-light" href="cad_usuario.php">Cadastrar Usuário</a>
                </li>
                <li class="nav-item a">
                    <a class="nav-link text-light" href="#">Relatórios</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <h2>Lista de Chamados</h2>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Requerente</th>
                    <th>Setor</th>
                    <th>Pedido</th>
                    <th>Data</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $row['ch_usu_nome'] ?></td>
                        <td><?= $row['ch_usu_setor'] ?></td>
                        <td><?= $row['ch_pedido'] ?></td>
                        <td><?= $row['ch_data'] ?></td>
                        <td><?= $row['ch_status'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </main>
</body>

</html>