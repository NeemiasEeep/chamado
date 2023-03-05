<?php
    
    include 'conexao.php';
    $nome = $_POST['nome'];
    $setor = $_POST['setor'];
    $telefone = $_POST['telefone'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    

    $sql = "INSERT INTO `tb_usuarios`(  `usu_nome`, `usu_tel`, `usu_setor`, usu_login, usu_senha) VALUES ('$nome','$telefone','$setor','$login','$senha')";
    $result = mysqli_query($conexao,$sql);

    if ($result) {
        ?>
        <script>
            alert('Chamado cadastrado com Sucesso!!')
            location.href = '../telas/cad_usuario.php';
        </script>
        <?php

    } else {
        ?>
        <script>
            alert('Deu ruim')
            //location.href = '../index.php';
        </script>
        <?php
        
    }
    
    
?>
