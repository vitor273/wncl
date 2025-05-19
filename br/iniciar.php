<?php
session_start();
    $emails = json_decode(file_get_contents("email.json"), true);
    $senhas = json_decode(file_get_contents("senha.json"), true);
    $nomes = json_decode(file_get_contents("nome.json"), true);
    $generos = json_decode(file_get_contents("genero.json"), true);
    $id = array_search($_SESSION['usuario'], $emails);
    $_SESSION['nomes']= $nomes;
    $_SESSION['senhas']= $senhas;
    $_SESSION['generos']= $generos;
    $_SESSION['emails']= $emails;
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
.container {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.tree {
  position: relative;
  width: 50px;
  height: 50px;
  transform-style: preserve-3d;
  transform: rotateX(-20deg) rotateY(30deg);
  animation: treeAnimate 5s linear infinite;
}

@keyframes treeAnimate {
  0% {
    transform: rotateX(-20deg) rotateY(360deg);
  }

  100% {
    transform: rotateX(-20deg) rotateY(0deg);
  }
}

.tree div {
  position: absolute;
  top: -50px;
  left: 0;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  transform: translateY(calc(25px * var(--x))) translateZ(0px);
}

.tree div.branch span {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, #69c069, #77dd77);
  clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
  border-bottom: 5px solid #00000019;
  transform-origin: bottom;
  transform: rotateY(calc(90deg * var(--i))) rotateX(30deg) translateZ(28.5px);
}

.tree div.stem span {
  position: absolute;
  top: 110px;
 /* updated top value */
  left: calc(50% - 7.5px);
  width: 15px;
  height: 50%;
  background: linear-gradient(90deg, #bb4622, #df7214);
  border-bottom: 5px solid #00000019;
  transform-origin: bottom;
  transform: rotateY(calc(90deg * var(--i))) translateZ(7.5px);
}

.shadow {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.4);
  filter: blur(20px);
  transform-style: preserve-3d;
  transform: rotateX(90deg) translateZ(-65px);
}

    </style>
    <body>
        <center><h1><b>PHP/ARRAY</b></h1></center>
        <hr/>
        <nav>
           &nbsp;&nbsp;<a href="inicial.php" style="color: green; text-decoration: none">HOME | </a><a href="listagem.php" style="color: green; text-decoration: none"> LISTAGEM |</a><a href="gravar.php" style="color: green; text-decoration: none"> SALVAR DADOS</a>
           <div class="user">
           <?php echo$nomes[$id]?> | <a href="sair.php" style="color: green; text-decoration: none">SAIR</a>&nbsp;&nbsp;
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
                        <label class="form-lable">IDADE</label>
                        <input class="form-control" type="text" name="nome" required placeholder="Digite o seu nome">
                        <br/>
                        <label class="form-lable">E-MAIL</label>
                        <input class="form-control" type="email" name="email" required placeholder="Digite o seu nome">
                        <br/>
                        <label class="form-lable">GENERO</label>
                        <select class="form-select" aria-label="Selecione seu genero" name="genero" required>
                      <option value="masculino">masculino</option>
                      <option value="feminino">feminino</option>
                      <option value="outro">outro</option>
                      </select>
                        <br/>
                        <label class="form-lable">NOME</label>
                        <input class="form-control" type="text" name="nome" required placeholder="Digite o seu nome">
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