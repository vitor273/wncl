
<?php
    session_start();
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
        <br/><br/>
        <div class="row justify-content-center row-cols-1 row-cols-md-2 text-center">
            <div class="cols">
                <div class="card mb-2 rounded shadow-sw">
                    <div class="card-header py-3">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="40" height="140" fill="black" class="bi bi-cpu" viewBox="0 0 16 16">
  <path d="M5 0a.5.5 0 0 1 .5.5V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2h1V.5a.5.5 0 0 1 1 0V2A2.5 2.5 0 0 1 14 4.5h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14v1h1.5a.5.5 0 0 1 0 1H14a2.5 2.5 0 0 1-2.5 2.5v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14h-1v1.5a.5.5 0 0 1-1 0V14A2.5 2.5 0 0 1 2 11.5H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2v-1H.5a.5.5 0 0 1 0-1H2A2.5 2.5 0 0 1 4.5 2V.5A.5.5 0 0 1 5 0m-.5 3A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 11.5 3zM5 6.5A1.5 1.5 0 0 1 6.5 5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5zM6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
</svg>&nbsp;<b>SALVAMENTO DE DADOS</b></h3>
                    </div>
                    <div class="card-body">
                        <?php
                        $porc = 0;
                        $dados = $_SESSION['nomes'];
                        $conteudo = json_encode($dados, JSON_PRETTY_PRINT);
                        file_put_contents("nome.json", $conteudo);
                        $porc = 25;
                        $dados = $_SESSION['emails'];
                        $conteudo = json_encode($dados, JSON_PRETTY_PRINT);
                        file_put_contents("email.json", $conteudo);
                        $porc = 50;
                        $dados = $_SESSION['generos'];
                        $conteudo = json_encode($dados, JSON_PRETTY_PRINT);
                        file_put_contents("genero.json", $conteudo);
                        $porc = 75;
                        echo"<div class='progress'>";
                        echo "<div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: $porc%'>$porc%</div>";
                        if($porc == 100)
                        echo"<br/><h4 style = 'color: #000000;' >DADOS SALVOS COM SUCESSO!</h4>";
                        echo "</div>";
                        ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>