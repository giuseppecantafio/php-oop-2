<?php

class Products {
    protected $prodotto;
    protected $marca;
    protected $animale;
    protected $prezzo;

    function __construct($_prodotto, $_marca, $_animale, $_prezzo){
        $this->prodotto = $_prodotto;
        $this->marca = $_marca;
        $this->animale = $_animale;
        $this->prezzo = $_prezzo;
    }

    public function setProdotto($_prodotto){
        $this->prodotto = $_prodotto;
    }
    public function getProdotto(){
        return $this->prodotto;
    }

    public function setMarca($_marca){
        $this->marca = $_marca;
    }
    public function getMarca(){
        return $this->marca;
    }

    public function setAnimale($_animale){
        $this->animale = $_animale;
    }
    public function getAnimale(){
        return $this->animale;
    }

    public function setPrezzo($_prezzo){
        $this->prezzo = $_prezzo;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }

}
?>