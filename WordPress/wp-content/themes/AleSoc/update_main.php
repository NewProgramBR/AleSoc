<?php
    //require_once('../../../wp-load.php'); //WordPress functions

    switch ($_POST['id']) {
        case 'avaliacoes':
            $data = include('avaliacoes.php');
            break;

        case 'sobre':
            $data = include('sobre.php');
            break;

        default:
            $data = 'false';
            break;
    }
    echo $data;
    exit();
?>
