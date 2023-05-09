<?php class Professor
{
    private $nome;
    private $cpf;
    private $dataNasc;
    private $email;
    private $celular;
    private $materiadesignada;

    // Constructor
    public function __construct()
    {
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;
    }
    public function setmateriadesignada($materiadesignada)
    {
        $this->materiadesignada = $materiadesignada;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setcelular($celular)
    {
        $this->celular = $celular;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCpf()
    {
        return $this->cpf;
    }
    public function getDataNasc()
    {
        return $this->dataNasc;
    }
    public function getmateriadesignada()
    {
        return $this->materiadesignada;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getcelular()
    {
        return $this->celular;
    }


    function imprimir()
    {
        echo "Nome : " . $this->nome;
        echo "<br>CPF : " . $this->cpf;
        echo "<br>Data Nasc : " . $this->dataNasc;
        echo "<br>Materia Lecionada : " . $this->materiadesignada;
        echo "<br>Email : " . $this->email;
        echo "<br>celular : " . $this->celular;
    }
}
