<?php
    session_start();
    //Incializa o array
    if (!isset($_SESSION['pessoas'])) {
        $_SESSION['pessoas'] = [];
    }
    //Adicionar
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $id = $_POST['id'];
        $pessoa = ['nome'=>$nome,'idade'=>$idade];
        if ($id === '') {
            $_SESSION['pessoas'][] = $pessoa;//Criando o registro
        } else {
            $_SESSION['pessoas'][$id] = $pessoa;//Atualizando
        }
        header("Location:pessoa.php");
        exit();
    }
    //Deletar
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        unset($_SESSION['pessoas'][$id]);
        header("Location:pessoa.php");
        exit();
    }
    //Editar
    $editando = false;
    $editId = '';
    $editNome = '';
    $editIdade = '';
    if (isset($_GET['edit'])) {
        $editando = true;
        $editId = $_GET['edit'];
        $editNome = $_SESSION['pessoas'][$editId]['nome'];
        $editIdade = $_SESSION['pessoas'][$editId]['idade'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf8">
        <title>CRUD - PHP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <center><h1><?=$editando ? "Editar Pessoa" : "CRUD"?></h1></center>
        </hr>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
                <div class="card mb-4 rounded-3 shadow-sw">
                    <div class="card-header py-3">

                        <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                       

        <center></svg>&nbsp;&nbsp;<font style="font-size: 30px;"><b>CRUD PESSOA</b></font></center>
        <form method="post" action="pessoa.php">
            <input type="hidden" name="id" value="<?= htmlspecialchars($editId) ?>">
            <label>NOME</label><br/>
            <input type="text" name="nome" required value="<?=htmlspecialchars($editNome)?>"><br/>
            <label>IDADE</label><br/>
            <input type="number" name="idade" required value="<?=htmlspecialchars($editIdade)?>"><br/>
            <button type="submit"><?=$editando ? "Atualizar" : "Cadastrar"?><button type="button" class="btn btn-primary">cadastrar</button>
        </form>
        <br/>
        <table class=table class="table table-dark table-striped-columns" border="1" cellpadding="5">
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>IDADE</th>
                <th>AÇÕES</th>
            </tr>
            <?php foreach($_SESSION['pessoas'] as $index => $pessoa): ?>
            <tr>
                <td><?= $index ?></td>
                <td><?= htmlspecialchars($pessoa['nome'])?></td>
                <td><?=htmlspecialchars($pessoa['idade'])?></td>
                <td>
                    <a href="pessoa.php?edit=<?=$index?>"><button type="button" class="btn btn-outline-success">editar</button></a>
 
                    <a href="pessoa.php?delete=<?=$index?>" onclick="return confirm('Deseja realmente excluir?')"><button type="button" class="btn btn-outline-danger">excluir</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
