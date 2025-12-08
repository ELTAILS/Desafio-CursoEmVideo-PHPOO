<?php
require_once "AcoesVideo.php";
class Video implements AcoesVideo{
    private string $titulo;
    private int $avaliacao;
    private int $views;
    private int $curtidas;
    private bool $reproduzindo;

    public function __construct($titulo){
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }    

    //GET E SET

    public function getTitulo(){
        return $this->titulo;
    }

    public function setTitulo(string $titulo){
        $titulo = trim($titulo);

        if ($titulo === "") {
            throw new InvalidArgumentException("O título não pode ser vazio.");
        }

        $this->titulo = $titulo;
    }


    public function getAvaliacao(){
        return $this->avaliacao;
    }

    public function setAvaliacao(int $avaliacao){
        if($avaliacao < 1){
            throw new InvalidArgumentException("Total de avalições está abaixo do esperado!");
        }

        $this->avaliacao = $avaliacao;
    }

    public function getViews(){
        return $this->views;
    }

    public function setViews(int $views){
        $this->views = $views;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }

    public function setCurtidas(int $curtidas){
        $this->curtidas = $curtidas;
    }

    public function getReproduzindo(){
        return $this->reproduzindo;
    }

    public function setReproduzindo(bool $reproduzindo){
        $this->reproduzindo = $reproduzindo;
    }

    //Método importado
    public function play(){
        $this->setReproduzindo(true);
    }
    public function pause(){
        $this->setReproduzindo(false);
    }
    public function like(){
        $this->curtidas++;
    }
}