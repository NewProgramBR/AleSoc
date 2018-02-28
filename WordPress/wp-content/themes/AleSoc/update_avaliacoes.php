<?php
//    require_once('../../../wp-load.php'); //WordPress functions
    include('avaliacoes.php'); //Avaliacoes functions

    $Avaliacoes = new Avaliacoes(false, ['bimestre', [1,2,3,4]], 'anos');
    $data = [$Avaliacoes->pergunta, $Avaliacoes->htmlThis(false)];
    echo json_encode($data);
    exit();
?>
