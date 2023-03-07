<html>
<?php
session_start();
include '../assets/head.php';
include '../prog/conexao.php';
$sql = "SELECT * FROM tb_usuarios";
$result = mysqli_query($conexao, $sql);
$id;
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
        <h1 class="">Cadastrar chamado</h1>
        <form action="../prog/insert_chamado.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <select class="form-control" name="nome" required>
                    <option value="">Escolha um nome</option>
                    <?php
                    for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                        $row = mysqli_fetch_assoc($result);
                        echo "<option>", $row['usu_nome'], "</option>";
                        $id = $row['usu_id'];
                    }
                    ?>
                </select>
                <div class="form-group">
                    <label for="">Setor</label>
                    <select class="form-control" name="setor" required>
                        <option value="">Escolha o Setor</option>
                        <?php
                        mysqli_data_seek($result, 0); // volta para o início do resultado
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<option>", $row['usu_setor'], "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Descrição do Chamado</label>
                    <textarea class="form-control" name="descricao" rows="3" placeholder="Digite aqui seu problema" required></textarea>
                </div>

                <div class="form-group">
                    <label for="">Data</label>
                    <input class="form-control" type="date" name="data" value="<?php echo date('Y-m-d'); ?>" disabled>
                </div>

                <div class="form-group">
                    <label for="">Status</label>
                    <input name="status" type="text" class="form-control" value="Aguardando Inicio" disabled>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <br>
            <button class="btn btn-primary">Criar</button>
        </form>

    </main>
</body>

</html>