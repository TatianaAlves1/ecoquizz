<?php

function verificar_email($conexao,$email){
    $sql = "SELECT * FROM user WHERE emailUser = ?";
    $vrf = $conexao->prepare($sql);
    $vrf->bindParam(1,$email);
    $vrf->execute();
    if($vrf->rowCount()>0){
        redirecionar_pagina("<div class='alert alert-danger' id='alerta' role='alert'>E-mail já cadastrado!</div>",'../index.php');
        exit;
    }

}
function verificar_alerta(){
  if( isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
}

function cadastrar_usuario($conexao,$nome,$email,$tipo){
    $dataCad = date("Y-m-d");
    $sql = "INSERT INTO user(nomeUser,emailUser,tipoUser, dataCadUser) VALUES(?,?,?,?)";
    $obj = $conexao->prepare($sql);
    $obj->bindParam(1,$nome);
    $obj->bindParam(2,$email);
    $obj->bindParam(3,$tipo);
    $obj->bindParam(4,$dataCad);

    if($obj->execute()){
        // header('Location:);
        redirecionar_pagina("<div class='alert alert-success' role='alert' id='alerta'>Bem-vindo(a) ".$nome."</div>",'../quiz.php');
    }

}

function cadastrar_resp($conexao,$q1,$q2,$q3,$q4,$user){
    $sql = "INSERT INTO respostas(topico1,topico2,topico3,topico4,idUser) VALUES(?,?,?,?,?)";
    $obj = $conexao->prepare($sql);
    $obj->bindParam(1,$q1);
    $obj->bindParam(2,$q2);
    $obj->bindParam(3,$q3);
    $obj->bindParam(4,$q4);
    $obj->bindParam(5,$user);

   $obj->execute();
}

function redirecionar_pagina($msg,$url){
    // echo "<script>alert('$msg')</script>";
    session_start();
    $_SESSION['msg'] = $msg;
    echo "<script>window.location='$url'</script>";
}


function verificar_sessao($sessao,$path){
    if(!isset($sessao)){
        header("Location:$path");
        exit;
      }
}

function contar_pontos($vetor){
    if (isset($vetor)) {
        $total =  count($vetor);  
      }else{
        $total = 0;
   }
   return $total;
}

?>