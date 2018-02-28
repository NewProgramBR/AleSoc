<?php
    class Avaliacoes
    {
        function __construct($a1 = true, $a2 = ['bimestre', [1,2,3,4]], $a3 = [1,2,3])
        {
            $this->etapa = $a1;     //true = 1ª pergunta | false = 2ª pergunta
            $this->divisao = $a2;   //bimestre/semestre/trimestre
            $this->pergunta = ($a1) ? 'Qual é o seu ano?' : 'Qual é o seu ' . $a2[0] . '?';

            $this->qtd_anos = $a3;
        }

        function htmlThis(){
            $k = ($this->etapa) ? $this->qtd_anos : $this->divisao[1];
            foreach ($k as $val) {
                $data .= '<div class="opt _center-child" _v=' . $val . '>';
                $data .= $val . 'º';
                $data .= '</div>';
            }
            return $data;
        }
    }
?>
