<?php
abstract class Veiculo {
    private int $ano;
    private string $marca;
    private string $modelo;

    public function __construct(string $marca, string $modelo, int $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getAno () : int {
        return $this->ano;
    }

    public function getMarca () : string {
        return $this->marca;
    }

    public function getModelo () : string {
        return $this->modelo;
    }

    public function setAno (int $ano) : void {
        $this->ano = $ano;
    }

    public function setMarca(string $marca) : void {
        $this->marca = $marca;   
    }

    public function setModelo(string $modelo) : void {
        $this->modelo = $modelo;   
    }

    abstract function calcularDiaria (float $valorMensal): float;
}