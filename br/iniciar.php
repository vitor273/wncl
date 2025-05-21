<?php
session_start();
if(!isset($_SESSION['nomes'])){
    $emails = json_decode(file_get_contents("email.json"), true);
    $senhas = json_decode(file_get_contents("senha.json"), true);
    $nomes = json_decode(file_get_contents("nome.json"), true);
    $generos = json_decode(file_get_contents("genero.json"), true);
    $id = array_search($_SESSION['usuario'], $emails);
    $_SESSION['nomes']= $nomes;
    $_SESSION['senhas']= $senhas;
    $_SESSION['generos']= $generos;
    $_SESSION['emails']= $emails;
}
else{
    $emails = $_SESSION['emails'];
    $id = array_search($_SESSION['usuario'], $emails);
    $nomes = $_SESSION['nomes'];
}
print_r($_SESSION);
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
            background-color: #000000;
            color:green;
        }
        .user {
            float: right;
        }
        /* From Uiverse.io by NlghtM4re */ 
/* From Uiverse.io by SelfMadeSystem */ 
/*
More comprehensive version at shenanigans.shoghisimon.ca/collection/css-rain-bg/
 */

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
           &nbsp;&nbsp;<a href="iniciar.php" style="color: white; text-decoration: none">HOME | </a><a href="listagem.php" style="color: white; text-decoration: none"> LISTAGEM |</a><a href="gravar.php" style="color: white; text-decoration: none"> SALVAR DADOS</a>
           <div class="user">
           <?php echo$nomes[$id]?> | <a href="sair.php" style="color: white; text-decoration: none">SAIR</a>&nbsp;&nbsp;
           </div>
        </nav>
        <br/><br/>
        <center><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <b>CADASTRAR NOVO USUÁRIO</b>
        </button></center>
        <br/><br/>
        <div class="row justify-content-center row-cols-2 row-cols-md-3 text-center">
            <div class="cols">
                <div class="card mb-4 rounded shadow-sw">
                    <div class="card-header py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73z"/>
</svg><h3><b>USUÁRIOS</b></h3>
                    </div>
                    <div class="card-body">
                        <?php
                            include "usuarios.php";
                        ?>
                    </div>
                </div>
            </div>
            <div class="cols">
                <div class="card mb-4 rounded shadow-sw">
                    <div class="card-header py-3">
                       <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
  <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927z"/>
</svg><h3><b>GENEROS</b></h3>
                    </div>
                    <div class="card-body">
                        <?php
                            include "generos.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CADASTRAR USUARIO</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body text - start">
                    <form action= "cadastro.php" method="post">
                        <label class="form-lable">NOME</label>
                        <input class="form-control" type="text" name="nome" required placeholder="Digite o seu nome">
                        <br/>
                        <label class="form-lable">GENERO</label>
                        <select class="form-select" aria-label="Selecione seu genero" name="genero" required>
                      <option value="Masculino">masculino</option>
                      <option value="Feminino">feminino</option>
                      <option value="Outro">outro</option>
                      </select>
                        <br/>
                        <label class="form-lable">E-MAIL</label>
                        <input class="form-control" type="email" name="email" required placeholder="Digite o seu e-mail">
                        <br/>
                        <label class="form-lable">SENHA</label>
                        <input class="form-control" type="password" name="senha" required placeholder="Digite a sua senha">
                        <br/>
                        <input type="submit";
                    <form>
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">FECHAR</button>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>