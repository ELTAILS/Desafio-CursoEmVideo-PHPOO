<?php

abstract class Pessoa {
    protected string $nome;
    protected int $idade;
    protected string $sexo;
    protected int $experiencia;

    protected function __construct(string $nome, int $idade, string $sexo){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
        $this->setExperiencia(0);
    }

    //GET E SET

    protected function getNome(){
        return $this->nome;
    }

    protected function setNome(string $nome){
        $nome = trim($nome);

        if($nome === ""){
            throw new InvalidArgumentException("O nome está vazio!");
        }

        $this->nome = $nome;
    }

    protected function getIdade(){
        return $this->idade;
    }

    protected function setIdade(int $idade){
        if($idade < 0){
            throw new InvalidArgumentException("A idade está negativa!");
        }

        $this->idade = $idade;
    }

    protected function getSexo(){
        return $this->sexo;
    }

    protected function setSexo(string $sexo){
        $sexo = strtoupper($sexo);
        if($sexo === "M" || $sexo === "F" || $sexo === "O"){
            $this->sexo = $sexo;
        } else {
            $this->sexo = "O";
        }
    }

    protected function getExperiencia(){
        return $this->experiencia;
    }

    protected function setExperiencia(int $experiencia){
        $this->experiencia = $experiencia;
    }
    //Método
    protected function ganharExp(){
        $xp = $this->experiencia + 15;
        $this->setExperiencia($xp);
    }

}