<?php
require_once __DIR__ . '/Traits/Carte.php';
class LoggedUsers extends Users {
    use Carte;
    
    protected $sconto;
    protected $numeroTessera;

    function __construct($_nome, $_cognome, $_indirizzo, $_sconto = 20) {
        parent::__construct($_nome, $_cognome, $_indirizzo, $_sconto);
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