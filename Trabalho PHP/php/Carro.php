<?php class Carro
{
    // Atributos
    private $modelo;
    private $cor;
    private $nmrPlaca;
    private $qtdportas;

    // Construtores
    function __construct($Modelo, $Cor, $nmrPlaca, $qtdportas)
    {
        $this->modelo = $Modelo;
        $this->cor = $Cor;
        $this->nmrPlaca = $nmrPlaca;
        $this->qtdportas = $qtdportas;
    }

    // Getters e Setters
    function set_modelo($Modelo)
    {
        $this->modelo = $Modelo;
    }
    function get_modelo()
    {
        return ($this->modelo);
    }
    function set_cor($Cor)
    {
        $this->cor = $Cor;
    }
    function get_cor()
    {
        return ($this->cor);
    }
    function set_nmrPlaca($nmrPlaca)
    {
        $this->nmrPlaca = $nmrPlaca;
    }
    function get_nmrPlaca()
    {
        return ($this->nmrPlaca);
    }
    function set_qtdportas($qtdportas)
    {
        $this->qtdportas = $qtdportas;
    }
    function get_qtdportas()
    {
        return ($this->qtdportas);
    }


    // Métodos
    function corDoCarro()
    {
        echo "\tO carro de modelo " . $this->modelo . " é da cor " . $this->cor . "";
    }

    function ligar()
    {
        echo "<br>O carro " . $this->modelo . " está ligado!";
    }

    function acelearar()
    {
        echo "<br>O carro " . $this->modelo .  " está acelerando...";
    }
    function frear()
    {
        echo "<br>O carro " . $this->modelo . " está freiando!";
    }
    function acionarSeta($orientacao)
    {
        if ($orientacao == "esquerda") echo "\tO carro " . $this->modelo . " acionou seta esquerda!";
        else if ($orientacao == "direita") echo "\tO carro " . $this->modelo . " acionou seta direita!";
        else {
            echo "\tO carro " . $this->modelo . " é um celtinha";
        }
    }
}
