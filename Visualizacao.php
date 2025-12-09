<?php
require_once "Video.php";
require_once "Gafanhoto.php";

class Visualizacao {
    private Gafanhoto $espectador;
    private Video $aula;

    public function __construct(Gafanhoto $espectador, Video $aula){
        $this->setEspectador($espectador);
        $this->setAula($aula);
        $this->aula->setViews($this->aula->getViews() + 1);
        $this->espectador->setTotalDeVideosAssistidos($this->espectador->getTotalDeVideosAssistidos() + 1);
    }

    //GET e SET

    public function getEspectador(){
        return $this->espectador;
    }

    public function setEspectador(Gafanhoto $espectador): void{
        $this->espectador = $espectador;
    }

    public function getAula(){
        return $this->aula;
    }

    public function setAula(Video $aula): void{
        $this->aula = $aula;
    }

    //Método 

    public function avaliar(): void{
        $this->aula->setAvaliacao(5);
    }

    public function avaliarNota($nota): void{
        $this->aula->setAvaliacao($nota);
    }

    public function avaliarPorc($porc): void{
        
        if ($porc < 0 || $porc > 100) {
            throw new InvalidArgumentException("Porcentagem inválida.");
        }

        if($porc > 80){
            $this->aula->setAvaliacao(10);
        } else if($porc > 60){
            $this->aula->setAvaliacao(7);
        } else if ($porc > 40){
            $this->aula->setAvaliacao(5);
        } else if($porc > 20){
            $this->aula->setAvaliacao(2);
        } else {   
            $this->aula->setAvaliacao(0);
        }
    }

}