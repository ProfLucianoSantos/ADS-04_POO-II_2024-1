<?php
class Pessoa {
    protected $codigo;
    protected $nome;
    protected $cpf;
    protected $rg;
    protected $telefone;

    public function __construct($codigo, $nome, $cpf, $rg, $telefone) {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->telefone = $telefone;
    }

    // Getters e Setters
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    public function getRG() {
        return $this->rg;
    }

    public function setRG($rg) {
        $this->rg = $rg;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
}
?>
