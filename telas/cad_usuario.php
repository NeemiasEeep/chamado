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
        
        <div  id="navbarNav">
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
        <h1 class="">Cadastrar Usuario</h1>
        <form action="../prog/insert_usuario.php" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" placeholder="Digite o nome" class="form-control">
                <div class="form-group">
                    <label for="">Setor</label>
                    <input type="text" name="setor" placeholder="Digite o setor" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="telefone" placeholder="Digite o numero" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Login</label>
                    <input class="form-control" type="text" name="login" placeholder="Digite o login">
                </div>

                <div class="form-group">
                    <label for="">Senha</label>
                    <input name="senha" type="password" class="form-control" placeholder="Digite a senha">
                </div>
            </div>

            <br>
            <button class="btn btn-primary">Cadastrar</button>
        </form>

    </main>
</body>

</html>