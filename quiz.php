<?php
session_start();
require_once('scripts/funcoes.php');
verificar_sessao($_SESSION['id'],'index.html');
verificar_alerta();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formEstilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <title>EcoQUIZ</title>
    <style>
      .topo-img{
        height:180px;
        display:block;
        margin: 0 auto;
      }
    </style>
</head>
<body>
<header class="container pt-4">
  <img src="img/ECOS_logo oficial_1.png" alt="logo ecos" class="img-fluid topo-img">
</header>

<main>
  <form id="regForm" method="post" action="scripts/scriptQuiz.php">

  <div class="tab container fs-4">
    <section class="container">
      
      <h1>Funciona assim:</h1>
      <p class="p-5 border">
        Vamos afirmar várias práticas sustentáveis <br> você assinala aquelas as quais já aderiu.
        Ao final vamos verifica seu <strong>ÍNDICE DE CONSUMO RESPONSÁVEL!</strong>
      </p>
    </section>
  </div>



  <div class="tab container fs-4"><h2>CONSUMO DE MATERIAIS DESCARTÁVEIS:</h2>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Reviso pelo menos duas vezes os textos e documentos antes de imprimir</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Imprimo sempre fazendo uso da frente e verso das páginas</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Digitalizo o que for possível e mantenho as cópias, preferencialmente em formato eletrônico</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Separo o papel a ser descartado e não jogo no cesto de lixo</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Já adotei um copo ou uma garrafinha  no Senac e deixo em local acessível (copa, bolsa, mesa)</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Evito comprar água em garrafas pequenas para reduzir os resíduos, vou mesmo é no bebedouro.</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Nos locais onde é necessário uso de descartáveis (clubes, clínicas, lanchonetes, etc) adoto somente um copo e não  o descarto a cada reposição de líquido.</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Uso somente duas folhas de papel toalha ao enxugar as mãos</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">No supermercado, uso caixas, sacolas retornáveis ou levo sacolas plásticas para serem reutilizadas</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Digo não aos canudos de plástico</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Reaproveito embalagens plásticas de alimentos após higienização</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Evito comprar frutas,  verduras e outros alimentos em embalagem de isopor</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q1[]"></div>
  </div>

  </div>

  <div class="tab  container fs-4"><h2>CONSUMO DE ÁGUA, LUZ E OUTRAS FONTES DE ENERGIA</h2>

  <div class="row pt-3 border-bottom">
    <div class="col-10">Não tomo banhos demorados. Cinco minutos costumam ser o tempo suficiente para eu fazer uma boa higienização</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q2[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Desligo o chuveiro na hora de me ensaboar e de passar o xampu e o condicionador, religando-o somente na hora do enxágue</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q2[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Fecho  a torneira ao escovar os dentes ou ao ensaboar louças e higienizar mãos</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q2[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Ao limpar pátios, uso balde e vassoura. Não “varro” a sujeira com mangueiras.</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q2[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Prefiro lavagem a seco para higienização de carro ou outros bens.</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q2[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Ao cozinhar ou fazer as refeições, retiro todos os produtos da geladeira de uma vez, evitando a abertura constante.</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q2[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Ao comprar eletrodomésticos, vejo se eles tem o Selo A (mais econômico)  da PROCEL.</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q2[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Evito ligar ar-condicionado, máquinas de lavar e outros equipamentos  nos horários de pico de energia (17h30 as 20h30), pois a conta sai mais cara.</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q2[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Apago a luz e desligo aparelhos elétricos  ao sair dos ambientes</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q2[]"></div>
  </div>
  </div>

  <div class="tab container fs-4"><h2>CONSUMO DE ALIMENTOS</h2>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Gosto de reaproveitar talos, cascas, sementes de frutas e verduras</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q3[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Evito comprar alimentos prontos que foram processados e embalados</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q3[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Planejo a alimentação semanal</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q3[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Adoro inventar novas receitas com sobras de alimentos</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q3[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Na minha casa, cultivo verduras e temperos em pequenos espaços</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q3[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Ao ir ao supermercado e feiras, levo uma lista de compras</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q3[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Ao comprar eletrodomésticos, vejo se eles tem o Selo A (mais econômico)  da PROCEL.</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q3[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Congelo alimentos prontos em pequenos recipientes para evitar que estraguem.</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q3[]"></div>
  </div>

  </div>

  <div class="tab container fs-4"><h2>DESTINAÇÃO DE RESÍDUOS E OUTRAS PRÁTICAS</h2>

  <div class="row pt-3 border-bottom">
    <div class="col-10">Jamais jogo lâmpadas, pilhas e baterias no lixo comum, costumo guardar para a destinação correta</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q4[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Procuro trocar celulares e outros aparelhos eletrônicos em lojas que recebem meus aparelhos antigos e fazem logística reversa</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q4[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Separo embalagens de refrigerantes e outras bebidas (pets, lata, vidros) após escorrer os líquidos residuais</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q4[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Separo as embalagens recicláveis do lixo orgânico e levo para pontos de coleta voluntárias de supermercados e outros pontos da cidade..</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q4[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Faço ou compro artesanato e outros produtos feitos com materiais recicláveis</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q4[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Coloco o lixo na lixeira próximo ao horário da coleta</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q4[]"></div>
  </div>
  <div class="row pt-3 border-bottom">
    <div class="col-10">Organizo roupas e outros produtos usados em bom estado para doação ou venda</div>
    <div class="col"><input type="checkbox" oninput="this.className = ''" name="q4[]"></div>
  </div>
  </div>

  <div style="overflow:auto;">
    <div class="container d-flex justify-content-center g-3">
      <button type="button" id="prevBtn" class="btn btn-success mt-4 mx-2" onclick="nextPrev(-1)">Anterior</button>
      <button type="button" id="nextBtn"  class="btn btn-success mt-4 mx-2" onclick="nextPrev(1)">Próximo</button>
    </div>
  </div>


  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>

  </form>
</main>
  <script src="js/multstep.js"></script>
  <script src="assets/js/funcoes.js"></script>
  <script>ocultar_alerta();</script>
</body>
</html>