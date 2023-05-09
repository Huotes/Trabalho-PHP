<?php class Disciplina
{
    private $codigo;
    private $nome;
    private $professor;
    private $qtdhoras;
    private $turma;
    private $classe;


    // Constructor
    public function __construct()
    {
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function setprofessor($professor)
    {
        $this->professor = $professor;
    }
    public function setqtdhoras($qtdhoras)
    {
        $this->qtdhoras = $qtdhoras;
    }
    public function setturma($turma)
    {
        $this->turma = $turma;
    }
    public function setclasse($classe)
    {
        $this->classe = $classe;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getprofessor()
    {
        return $this->professor;
    }
    public function getqtdhoras()
    {
        return $this->qtdhoras;
    }
    public function getturma()
    {
        return $this->turma;
    }
    public function getclasse()
    {
        return $this->classe;
    }


    function imprimir()
    {
        echo "Nome : " . $this->nome;
        echo "<br>Professor Responsavel : " . $this->professor;
        echo "<br>Carga horaria total : " . $this->qtdhoras;
        echo "<br>turma : " . $this->turma;
        echo "<br>classe : " . $this->classe;
    }
}
