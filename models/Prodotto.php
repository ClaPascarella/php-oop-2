<?php

class Prodotto
{


    public $nome;
    public $prezzo;
    public $categoria;

    public $immagine;


    public function __construct($primoArgomento, $secondoArgomento, Categoria $terzoArgomento)
    {
        $this->nome = $primoArgomento;
        $this->prezzo = $secondoArgomento;
        $this->categoria = $terzoArgomento;
    }


    public function getDescrizione()
    {

        return "$this->nome è un prodotto della categoria " . $this->categoria?->nome . " ed ha un prezzo di $this->prezzo";
    }
}
