<!doctype html>
<html lang="pt-br">
<?php
  session_start();
  if( isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Programa Ecos - SENAC/AM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="img/favicon.ico">
  <link rel="stylesheet" href="assets/css/estilo.css">
</head>
<body class="text-center">

    <section class="content">   
    <section class="bg-light border lateral">
      <img class="mb-4" src="img/ECOS_logo oficial_1.png" alt="" width="80%" height="80">
        <h2>Apresenta:</h2>
        <h1 my-4>Quiz da Sustentabilidade</h1> 
        <p style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Oi você!
          Aluno, colaborador, parceiro ou fornecedor do Senac.
          Você se considera um consumidor ambientalmente responsável?<br>  
          Sim? Que legal!<br>
          Mas não há nada que não possa melhorar, então...
          Vamos então avaliar o seu grau de<br><strong>consumo consciente??</strong>
        </p>
      </section>    
    <main class="form-signin bg-light border">
      <img class="mb-4" src="img/SENAC_Positiva_Horizontal.png" alt="" width="80%" height="80">
      <form method="post" class="needs-validation" action="scripts/cadUser.php" novalidate>
      
        <h1 class="h3 mb-3 fw-normal">Para iniciar preencha as informações:</h1>

        <div class="form-floating mt-4">
          <input type="text" name="nome" class="form-control" data-test="nome" id="floatingInput" placeholder="Nome completo" >
          <label for="floatingInput">Nome:</label>
        </div>

        <div class="form-floating mt-4">
          <input type="email" name="email" class="form-control" data-test="email" id="floatingInput" placeholder="nome@am.senac.br">
          <label for="floatingInput">Endereço de E-mail:</label>
        </div>

        <button class="w-100 btn btn-lg btn-success mt-4" type="submit" data-test="btn-cad" name="cadastrar">Iniciar o Quiz</button>
        <p class="mt-5 mb-3 text-muted">Programa Ecos - SENAC 2022</p>
      </form>
    </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="assets/js/funcoes.js"></script>
    <script>ocultar_alerta();</script>
</body>
</html>
