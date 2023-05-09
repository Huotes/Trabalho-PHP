<?php class Produto
{
    private $nome;
    private $marca;
    private $descricao;
    private $valor;
    public $prctatvalue;

    // Constructor
    public function __construct()
    {
    }

    // Getters e Setters
    function setNome($Nome)
    {
        $this->nome = $Nome;
    }
    function getNome()
    {
        return $this->nome;
    }
    function setMarca($Marca)
    {
        $this->marca = $Marca;
    }
    function getMarca()
    {
        return $this->marca;
    }
    function setDescricao($Descricao)
    {
        $this->descricao = $Descricao;
    }
    function getDescricao()
    {
        return $this->descricao;
    }
    function setValor($Valor)
    {
        $this->valor = $Valor;
    }
    function getValor()
    {
        return $this->valor;
    }


    // Métodos
    function atualizarValor()
    {
        $x =  $this->valor += (($this->Valor * $this->prctatvalue) / 100);
    }

    function imprimir()
    {
        echo "Nome: " . $this->nome;
        echo "<br>Marca " . $this->marca;
        echo  "<br>Descrição: " . $this->descricao;
        echo  "<br>Valor: " . $this->valor;
    }
}
