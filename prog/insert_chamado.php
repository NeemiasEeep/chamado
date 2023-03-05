<?php
    
    include 'conexao.php';
    $nome = $_POST['nome'];
    $id = $_POST['id'];
    $setor = $_POST['setor'];
    $desc = $_POST['descricao'];
    $data = date('Y-m-d');
    $status = 'Aguardando Inicio';

    $sql = "INSERT INTO `tb_chamados`( `ch_usu_id`, `ch_usu_nome`, `ch_usu_setor`, `ch_pedido`, ch_data, ch_status) VALUES ('$id','$nome','$setor','$desc','$data','$status')";
    $result = mysqli_query($conexao,$sql);

    if ($result) {
        ?>
        <script>
            alert('Chamado cadastrado com Sucesso!!')
            location.href = '../telas/chamados.php';
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
