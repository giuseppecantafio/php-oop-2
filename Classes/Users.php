<?php
class Users {
    protected $nome;
    protected $cognome;
    protected $email;
    protected $indirizzo;

    function __construct($_nome, $_cognome, $_email, $_indirizzo){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
        $this->indirizzo = $_indirizzo;

    }

    public function setNome() {
    $this->nome = $nome;
    }
    public function getNome() {
    return $this->nome;
    }

    public function setCognome() {
    $this->cognome = $cognome;
    }
    public function getCognome() {
        return $this->cognome;
    }

    #controllo mail da sistemare
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

}

?>