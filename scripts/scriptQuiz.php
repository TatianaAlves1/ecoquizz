<?php
ini_set('display_errors', 1);
error_reporting(0);
session_start();
require_once('conexao.php');
require_once('funcoes.php');
verificar_sessao($_SESSION['id'],'../index.html');

if( isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
}

$user = $_SESSION['id'];

$totalQ1 = contar_pontos($_POST['q1']);
$totalQ2 = contar_pontos($_POST['q2']);
$totalQ3 = contar_pontos($_POST['q3']);
$totalQ4 = contar_pontos($_POST['q4']);

$soma = $totalQ1 + $totalQ2 + $totalQ3 + $totalQ4;

cadastrar_resp($conn,$totalQ1,$totalQ2,$totalQ3,$totalQ4,$user);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
    <title>Resultado Final - Ecos</title>
    <style>
      .topo-img{
        height:180px;
        display:block;
        margin: 0 auto;
      }
      .result{
        width:50%
      }
      @media screen and (max-width:768px) {
        .result{ width:100% }
      }
    </style>
</head>
<body>
    <header class="container pt-4">
    <img src="../img/ECOS_logo oficial_1.png" alt="logo ecos" class="img-fluid topo-img">
    </header>

    <main class="">
        <section class="container mt-5">
        <table class="table table-success table-striped table-hover table-bordered">
        <tr>
            <th>Tópico</th>
            <th class="text-center">Pontuação</th>
        </tr>
        <tr>
            <td>CONSUMO DE MATERIAIS DESCARTÁVEIS</td>
            <td class="text-center"><?=$totalQ1?></td>
        </tr>
        <tr>
            <td>CONSUMO DE ÁGUA, LUZ E OUTRAS FONTES DE ENERGIA</td>
            <td class="text-center"><?=$totalQ2?></td>
        </tr>
        <tr>
            <td>CONSUMO DE ALIMENTOS</td>
            <td class="text-center"><?=$totalQ3?></td>
        </tr>
        <tr>
            <td>DESTINAÇÃO DE RESÍDUOS E OUTRAS PRÁTICAS</td>
            <td class="text-center"><?=$totalQ4?></td>
        </tr>
        <tr>
            <td><strong>RESULTADO GERAL</strong></td>
            <td class="text-center"><?=$soma?></td>
        </tr>
    </table>

    </section>
      <h2 class="text-center mt-5">Verifique sua classificação:</h2>
        <section class="container text-center mt-4">
            <table class="table table-hover mx-auto result" style="border: 1px solid black">
                <tr>
                    <th>Pontuação</th>
                    <th>Conceito</th>
                </tr>
                <tr style="background-color:#adffa1">
                    <td>29 a 37 </td>
                    <td>Que orgulho! Sou um(a) super-herói(a) verde!</td>
                </tr>
                <tr style="background-color:#f7ffa1">
                    <td>20 a 28</td>
                    <td>Estou no caminho, pensando nas futuras gerações.</td>
                </tr>
                <tr style="background-color:#ffa538">
                    <td>11 a 19</td>
                    <td>Muito a fazer, mas já me reinventando.</td>
                </tr>
                <tr style="background-color:#fc653f">
                    <td>0 a 10 </td>
                    <td>Ai que vergonha! Vou melhorar em 2023.</td>
                </tr>
            </table>
        </section>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php 
    session_destroy();
    unset($_SESSION['id']);
?>
</html>