
<?php
  session_start();

  if(!isset($_SESSION['usuarios'])){
header("Locatio: index.php");
}
    $emails = $_SESSION['emails'];
    $id = array_search($_SESSION['usuario'], $emails);
    $nomes = $_SESSION['nomes'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale-1">
        <meta http-equiv="content-language" content="pt-br">
        <title>PHP / Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <style>
        body {
            background-color: #4682B4;
            color: green;
        }
        .user {
            float: right;
        }
        .container {
  width: 100%;
  height: 100%;
  background: #000;
  background-image: radial-gradient(4px 100px at 0px 235px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 235px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 117.5px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 252px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 252px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 126px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 150px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 150px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 75px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 253px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 253px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 126.5px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 204px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 204px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 102px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 134px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 134px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 67px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 179px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 179px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 89.5px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 299px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 299px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 149.5px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 215px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 215px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 107.5px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 281px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 281px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 140.5px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 158px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 158px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 79px, #0f0 100%, #0000 150%),
    radial-gradient(4px 100px at 0px 210px, #0f0, #0000),
    radial-gradient(4px 100px at 300px 210px, #0f0, #0000),
    radial-gradient(1.5px 1.5px at 150px 105px, #0f0 100%, #0000 150%);
  background-size:
    300px 235px,
    300px 235px,
    300px 235px,
    300px 252px,
    300px 252px,
    300px 252px,
    300px 150px,
    300px 150px,
    300px 150px,
    300px 253px,
    300px 253px,
    300px 253px,
    300px 204px,
    300px 204px,
    300px 204px,
    300px 134px,
    300px 134px,
    300px 134px,
    300px 179px,
    300px 179px,
    300px 179px,
    300px 299px,
    300px 299px,
    300px 299px,
    300px 215px,
    300px 215px,
    300px 215px,
    300px 281px,
    300px 281px,
    300px 281px,
    300px 158px,
    300px 158px,
    300px 158px,
    300px 210px,
    300px 210px,
    300px 210px;
  animation: hi 150s linear infinite;
}

@keyframes hi {
  0% {
    background-position:
      0px 220px,
      3px 220px,
      151.5px 337.5px,
      25px 24px,
      28px 24px,
      176.5px 150px,
      50px 16px,
      53px 16px,
      201.5px 91px,
      75px 224px,
      78px 224px,
      226.5px 350.5px,
      100px 19px,
      103px 19px,
      251.5px 121px,
      125px 120px,
      128px 120px,
      276.5px 187px,
      150px 31px,
      153px 31px,
      301.5px 120.5px,
      175px 235px,
      178px 235px,
      326.5px 384.5px,
      200px 121px,
      203px 121px,
      351.5px 228.5px,
      225px 224px,
      228px 224px,
      376.5px 364.5px,
      250px 26px,
      253px 26px,
      401.5px 105px,
      275px 75px,
      278px 75px,
      426.5px 180px;
  }
  to {
    background-position:
      0px 6800px,
      3px 6800px,
      151.5px 6917.5px,
      25px 13632px,
      28px 13632px,
      176.5px 13758px,
      50px 5416px,
      53px 5416px,
      201.5px 5491px,
      75px 17175px,
      78px 17175px,
      226.5px 17301.5px,
      100px 5119px,
      103px 5119px,
      251.5px 5221px,
      125px 8428px,
      128px 8428px,
      276.5px 8495px,
      150px 9876px,
      153px 9876px,
      301.5px 9965.5px,
      175px 13391px,
      178px 13391px,
      326.5px 13540.5px,
      200px 14741px,
      203px 14741px,
      351.5px 14848.5px,
      225px 18770px,
      228px 18770px,
      376.5px 18910.5px,
      250px 5082px,
      253px 5082px,
      401.5px 5161px,
      275px 6375px,
      278px 6375px,
      426.5px 6480px;
  }
}
    </style>
    <body class="container">
        <center><h1><b>PHP/ARRAY</b></h1></center>
        <hr/>
        <nav>
           &nbsp;&nbsp;<a href="iniciar.php" style="color: white; text-decoration: none">HOME |</a><a href="listagem.php" style="color: white; text-decoration: none"> LISTAGEM |</a><a href="gravar.php" style="color: white; text-decoration: none"> SALVAR DADOS</a>
           <div class="user">
                <b style="color: white"><?php echo $nomes[$id]; ?> |</b> <a href="sair.php" style="color: white; text-decoration: none">SAIR</a>&nbsp;&nbsp;
           </div>
        </nav>
        <center><br><input type="text" class="form-control" placeholder="pesquisar" aria-label="Username" aria-describedby="basic-addon">
        <br></br>
        <button type="button" class="btn btn-outline-success">
            <b>PESQUISAR</b>
        </button></center>
        <br></br>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 text-center">
            <div class="cols">
                <div class="card mb-2 rounded shadow-sw">
                    <div class="card-header py-3">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="black" class="bi bi-credit-card-2-front-fill" viewBox="0 0 15 17">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z"/>
</svg>&nbsp;<b>LISTAGEM DE USUÁRIOS</b></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>E-MAIL</th>
                                <th>GENERO</th>
                                <th>AÇÕES</th>
                            </tr>
                            <?php
                                $reg = count($_SESSION['nomes']);
                                for ($i=0; $i <= $reg-1 ; $i++) { 
                                    echo "<tr>";
                                        echo "<td>$i</td>";
                                        echo "<td>".$_SESSION['nomes'][$i]."</td>";
                                        echo "<td>".$_SESSION['emails'][$i]."</td>";
                                        echo "<td>".$_SESSION['generos'][$i]."</td>";
                                        echo "<td><a href='editar.php?pos=$i' class='editar-btn' data-bs-toggle='modal' data-bs-target='#exampleModal' data-id='$i' data-nome='".$_SESSION['nomes'][$i]."' data-email='".$_SESSION['emails'][$i]."' data-genero='".$_SESSION['generos'][$i]."' data-senha='".$_SESSION['senhas'][$i]."'><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='currentColor' class='bi bi-emoji-sunglasses-fill' viewBox='0 0 16 16'>
                                        <path d='M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M2.31 5.243A1 1 0 0 1 3.28 4H6a1 1 0 0 1 1 1v.116A4.2 4.2 0 0 1 8 5c.35 0 .69.04 1 .116V5a1 1 0 0 1 1-1h2.72a1 1 0 0 1 .97 1.243l-.311 1.242A2 2 0 0 1 11.439 8H11a2 2 0 0 1-1.994-1.839A3 3 0 0 0 8 6c-.393 0-.74.064-1.006.161A2 2 0 0 1 5 8h-.438a2 2 0 0 1-1.94-1.515zM4.969 9.75A3.5 3.5 0 0 0 8 11.5a3.5 3.5 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1-3.898-2.25.5.5 0 0 1 .866-.5z'/>
                                      </svg></a> | <a href='excluir.php?pos=$i'><svg xmlns='http://www.w3.org/2000/svg' width='22' height='22' fill='red' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                            </svg></a></td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>ATUALIZAR USUÁRIO</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>
                    <div class='modal-body'>
                        <form action='editar.php' method='post'>
                            <label class='form-label'>NOME</label>
                            <input class='form-control' type='text' name='nome' id='edit-nome' required/>
                            <br/>
                            <label class='form-label'>E-MAIL</label>
                            <input class='form-control' type='email' name='email' id='edit-email' required/>
                            <br/>
                            <label class='form-label'>GENERO</label>
                            <select class='form-select' aria-label='Selecione um genero' name='genero' id='edit-genero' required>
                                <option selected>Selecione um genero</option>
                                <option value='Masculino'>Masculino</option>
                                <option value='Feminino'>Feminino</option>
                                <option value='Outro'>Outro</option>
                            </select>
                            <br/>
                            <label class='form-label'>SENHA</label>
                            <input class='form-control' type='password' id='edit-senha' name='senha'/>
                            <br/>
                            <input type='hidden' name='id' id='edit-id'/>
                            <input type='submit' class='btn btn-success' value='ATUALIZAR'/>
                        </form>
                    </div>
                    <div class='modal-footer'>
                        <button type='button' class='btn btn-danger' data-bs-dismiss='modal'>FECHAR</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            const botoesEditar = document.querySelectorAll('.editar-btn');
            botoesEditar.forEach(function(botao) {
            botao.addEventListener('click', function () {
                // Pega os valores do botão clicado
            const id = this.getAttribute('data-id');
            const nome = this.getAttribute('data-nome');
            const email = this.getAttribute('data-email');
            const genero = this.getAttribute('data-genero');
            const senha = this.getAttribute('data-senha');
                // Preenche os campos do modal
            document.getElementById('edit-id').value = id;
            document.getElementById('edit-nome').value = nome;
            document.getElementById('edit-email').value = email;
            document.getElementById('edit-genero').value = genero;
            document.getElementById('edit-senha').value = senha;
            });
            });
            });
        </script>
    </body>
</html>