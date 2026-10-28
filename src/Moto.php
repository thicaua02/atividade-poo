<?php
class Moto extends Veiculo {
    private int $cilindradas;

    public function __construct(string $marca, string $modelo, int $ano, int $cilindradas)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->cilindradas = $cilindradas;
    }

    public function getCilindradas () : int {
        return $this->cilindradas;
    }

    public function calcularDiaria(): float
    {
        return 70.00;
    }
}