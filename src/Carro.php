<?php
class Carro extends Veiculo {
    private int $quantidadePortas;

    public function __construct(string $marca, string $modelo, int $ano, int $quantidadePortas)
    {
        parent::__construct($marca, $modelo, $ano);
        $this->quantidadePortas = $quantidadePortas;
    }

    public function getQuantidadePortas () : int {
        return $this->quantidadePortas;
    }

    public function calcularDiaria(): float
    {
        return 150.00;
    }
}