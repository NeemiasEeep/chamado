<html>
<?php
session_start();
include 'assets/head.php';
include 'prog/conexao.php';
$sql = "SELECT * FROM tb_usuarios";
$result = mysqli_query($conexao, $sql);
$id;
?>

<body>

    <main>
        <form action="prog/login.php" method="post">
            <label for="">Login</label>
            <div class="form-group">
                <input type="text" class="form-control" name="login" placeholder="Login.." required>
            </div>
            <label for="">Senha</label>
            <div class="form-group">
                <input type="password" class="form-control" name="senha" placeholder="Senha..." required>
            </div>
            <br>
            
            <div class=" float-right ">
                <label class="radio" for="">Usuario: </label>
                <input class="" type="radio" name="tipo" id="" checked value="usuario">
                <label class="radio" for="">T.i: </label>
                <input class="" type="radio" name="tipo" id=""  value="t_i">
            </div>
            <br>
            <button class="btn btn-primary">Entrar</button>
        </form>
    </main>
</body>

</html>