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
            color : green;
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
        <br/><br/>
        <div class="row justify-content-center row-cols-1 row-cols-md-3 text-center">
            <div class="cols">
                <div class="card mb-4 rounded shadow-sw">
                    <div class="card-header py-3">
                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-coin" viewBox="0 0 15 17">
  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
</svg><b>LOGIN</b></h3>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post" class="text-start">
                            <label class="form-label"><b>E-MAIL</b></label>
                            <input class="form-control" type="email" name="email" required placeholder="Digite o seu e-mail."/>
                            <br/>
                            <label class="form-label"><b>SENHA</b></label>
                            <input class="form-control" type="password" name="senha" required placeholder="Digite sua senha."/>
                            <br/>
                            <button type="submit" class="btn btn-outline-success">ENTRAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>