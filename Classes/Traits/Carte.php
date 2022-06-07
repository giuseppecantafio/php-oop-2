<?php

trait Carte {
    protected $scadenzaCarta;

    public function setScadenzaCarta($_scadenzaCarta) {
    if (date('Y/M') > $_scadenzaCarta){
        throw new Exception('Carta non valida');
        } else {
            $this->scadenzaCarta = $_scadenzaCarta;
        }
    }

    public function getScadenzaCarta(){
        return $this->scadenzaCarta;
    }

}
?>