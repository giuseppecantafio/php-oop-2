<?php

class LoggedUsers extends Users {
    protected $sconto;
    protected $numeroTessera;

    function __construct($_nome, $_cognome, $_email, $_indirizzo, $_sconto = 20) {
        parent::__construct($_nome, $_cognome, $_email, $_indirizzo, $_sconto);
        $this->sconto = $_sconto;
    }

    public function getSconto() { 
        return $this->sconto;
    }
    
    public function setNumeroTessera($_numeroTessera) { 
        $this->numeroTessera = $_numeroTessera;
    }

    public function getNumeroTessera() { 
        return $this->numeroTessera;
    }
}
?>