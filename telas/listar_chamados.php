<?php
include '../assets/head.php';
include '../prog/conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_inicial = $_POST['data_inicial'];
    $data_final = $_POST['data_final'];

    // Consulta o banco de dados com as datas fornecidas
    $sql = "SELECT * FROM tb_chamados WHERE ch_data BETWEEN '$data_inicial' AND '$data_final'";
    $result = mysqli_query($conexao, $sql);
} else {
    // Consulta o banco de dados sem filtro de data
    $sql = "SELECT * FROM tb_chamados";
    $result = mysqli_query($conexao, $sql);
}
?>

<link rel="stylesheet" href="../style.css">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <a class="navbar-brand" href="../index.php">Secretaria de Saúde</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse a" id="navbarNav">
            <ul class="navbar-nav ml-auto a">
                <li class="nav-item a">
                    <a class="nav-link text-light" href="cad_usuario.php">Cadastrar Usuário</a>
                </li>
                <li class="nav-item a">
                    <a class="nav-link text-light" href="chamados.php"> Novo Chamados</a>
                </li>
                <li class="nav-item a">
                    <a class="nav-link text-light" href="listar_chamados.php">Chamados</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>
        <h2>Lista de Chamados</h2>
        <br>
        <!-- Adiciona um formulário para pesquisa por data -->
        <form method="POST">
            <div class=" row">
                <div class="col-md-6">
                    <label for="data_inicial">Data Inicial:</label>
                    <input class="form-control" type="date" id="data_inicial" name="data_inicial">
                </div>
                <div class="col-md-6">
                    <label for="data_final">Data Final:</label>
                    <input class="form-control" type="date" id="data_final" name="data_final">
                </div>
            </div>


            <br>
            <button class="btn btn-primary" type="submit">Pesquisar</button>
        </form>
        <br>

        <table>
            <thead>
                <tr>
                    <th>Requerente</th>
                    <th>Setor</th>
                    <th>Pedido</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Status</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?= $row['ch_usu_nome'] ?></td>
                        <td><?= $row['ch_usu_setor'] ?></td>
                        <td><?= $row['ch_pedido'] ?></td>
                        <td><?= $row['ch_data'] ?></td>
                        <td><?= $row['ch_hora'] ?></td>
                        <td><?= $row['ch_status'] ?></td>
                        <td><a href="" ><i class="bi bi-check2-square"></i> </a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <button class="btn btn-primary" onclick="window.print()">Imprimir</button>
    </main>
    <?php //include '../assets/footer.php'; 
    ?>
</body>

</html>