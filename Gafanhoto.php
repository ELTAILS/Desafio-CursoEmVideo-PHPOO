<?php
require_once "Pessoa.php";
class Gafanhoto extends Pessoa {
    private bool $login;
    private int $TotalDeVideosAssistidos;

    public function __construct(string $nome, int $idade, string $sexo){
        parent::__construct($nome, $idade, $sexo);
        $this->setLogin(true);
        $this->setTotalDeVideosAssistidos(0);
    }

    //GET E SET
    public function getLogin(){
        return $this->login;
    }

    public function setLogin(bool $login){
        $this->login = $login;
    }

    public function getTotalDeVideosAssistidos(){
        return $this->TotalDeVideosAssistidos;
    }

    public function setTotalDeVideosAssistidos(int $TotalDeVideosAssistidos){
        $this->TotalDeVideosAssistidos = $TotalDeVideosAssistidos;
    }

    //Método
    public function viuMaisUm(){

        if(!$this->login){
            throw new Exception("Você tem que está logado!");
        }

        $this->TotalDeVideosAssistidos++;
        $this->ganharExp();
    }
}