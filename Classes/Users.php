<?php
require_once __DIR__ . '/Traits/Carte.php';
class Users {
    use Carte;
    
    protected $nome;
    protected $cognome;
    protected $email;
    protected $indirizzo;
    protected $acquisti = [];

    function __construct($_nome, $_cognome, $_indirizzo){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->indirizzo = $_indirizzo;
    }

    public function setNome($_nome) {
    $this->nome = $_nome;
    }
    public function getNome() {
    return $this->nome;
    }

    public function setCognome($_cognome) {
    $this->cognome = $_cognome;
    }
    public function getCognome() {
        return $this->cognome;
    }

    public function setEmail($_email) {
    if (!strpos($_email, '@') || !strpos($_email, '.')){
        throw new Exception('Email non valida');
        } else {
            $this->email = $_email;
        }
    }
    public function getEmail() {
        return $this->email;
    }

    public function setAcquisti($_acquisti){
        $this->acquisti[] = $_acquisti;
    }
    public function getAcquisti(){
        return $this->acquisti;
    }

}

?>