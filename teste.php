<?php 
    class Carro{
        public function __construct(private string $modelo, private int $ano){}
        public function descricao()
        {
            echo $this->modelo . " " . $this->ano;
        }
    }
    $carro = new Carro("Fusca", 1973);
    $carro->descricao();
?>
<!--  -->