<?php

    // Lita de atributos
    class Cadeira{

        public $cor;
        public $peso;
        public $material;
        public $durabilidade;
        public $custo;
        public $tamanho;
        public $encosto;
        public $regulagem_minima;
        public $regulagem_maxima;

        //Método construtor. Parâmetros obrigatórios
        public function __construct($cor, $peso, $material, $durabilidade, $custo,  $encosto, $regulagem_minima, $regulagem_maxima)
                                    {
                                        $this->cor = $cor;
                                        $this->peso = $peso;
                                        $this->material = $material;
                                        $this->durabilidade = $durabilidade;
                                        $this->custo = $custo;
                                        $this->encosto = $encosto;
                                        $this->regulagem_minima = $regulagem_minima;
                                        $this->regulagem_maxima = $regulagem_maxima;
                                    }

        //lista de métodos
        public function aumentar($medida){
            $this->tamanho = $this->tamanho + $medida;
            if($this->tamanho > $this->regulagem_maxima)
            {
                $this->tamanho = $this->regulagem_maxima;
            }
        }

        public function abaixar($medida){
            $this->tamanho = $this->tamanho - $medida;
            if($this->tamanho < $this->regulagem_minima)
            {
                $this->tamanho = $this->regulagem_minima;
            }
        }
    }

?>