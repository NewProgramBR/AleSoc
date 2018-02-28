<?php
//    require_once('../../../wp-load.php'); //WordPress functions
    include('avaliacoes.php'); //Avaliacoes functions

    if ($_POST['post'] == 'true') {
        $data .= '<div class="post">';
        $data .=    '<header>';
        $data .=        '<div class="data _center-child">27</div>';
        $data .=        '<h1 class"_center-child">Contruções políticas</h1>';
        $data .=        '<div class="pontos _center-child">10pts</div>';
        $data .=    '</header>';
        $data .= '</div>';
        echo $data;
    }
    else{
        $Avaliacoes = new Avaliacoes(false, ['bimestre', [1,2,3,4]], 'anos');
        $data = [$Avaliacoes->pergunta, $Avaliacoes->htmlThis()];
        echo json_encode($data);
    }
    exit();
?>
