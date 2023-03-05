<?php
    include 'conexao.php';
    session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo'];

   if($tipo == 'usuario'){
    
    $sql = "SELECT * FROM tb_usuarios where usu_login = '$login'";
    $result = mysqli_query($conexao,$sql);

    if (!$result) {
        die('Erro na consulta: ' . mysqli_error($conexao));
    }
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['usu_login'] == $login and $row['usu_senha'] == $senha ){
            $_SESSION['id_usuario'] = $row['usu_id'];
            $_SESSION['nome_usuario'] = $row['usu_nome'];
            ?>
            <script>
                alert('Seja Bem Vindo!');
                location.href = '../telas/chamados.php';
            </script>
            <?php
        }
    } else {
        echo "Usuário não encontrado";
    }
   }else{
    $sql = "SELECT * FROM tb_adm where adm_login = '$login'";
    $result = mysqli_query($conexao,$sql);

    if (!$result) {
        die('Erro na consulta: ' . mysqli_error($conexao));
    }
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['adm_login'] == $login and $row['adm_senha'] == $senha ){
            ?>
            <script>
                alert('Seja Bem Vindo!');
                location.href = '../telas/listar_chamados.php';
            </script>
            <?php
        }
    } else {
        echo "Usuário não encontrado";
    }
   }
    
?>