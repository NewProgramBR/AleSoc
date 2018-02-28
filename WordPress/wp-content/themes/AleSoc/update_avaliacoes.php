<?php
//    require_once('../../../wp-load.php'); //WordPress functions
    include('avaliacoes.php'); //Avaliacoes functions

    if ($_POST['post'] == 'true') {
        $data = 'ISSO DAQUI';
    }
    else{
        $Avaliacoes = new Avaliacoes(false, ['bimestre', [1,2,3,4]], 'anos');
        $data = [$Avaliacoes->pergunta, $Avaliacoes->htmlThis()];
    }
    echo json_encode($data);
    exit();
?>
