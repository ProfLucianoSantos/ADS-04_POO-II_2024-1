<?php
include_once 'Pessoa.php';

class Funcionario extends Pessoa {
    protected $dataAdmissao;
    protected $salario;
    protected $especialidade;

    public function __construct($codigo, $nome, $cpf, $rg, $telefone, $dataAdmissao, $salario, $especialidade) {
        parent::__construct($codigo, $nome, $cpf, $rg, $telefone);
        $this->dataAdmissao = $dataAdmissao;
        $this->salario = $salario;
        $this->especialidade = $especialidade;
    }

    // Getters e Setters
    public function getDataAdmissao() {
        return $this->dataAdmissao;
    }

    public function setDataAdmissao($dataAdmissao) {
        $this->dataAdmissao = $dataAdmissao;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
}
?>
