<?php

class shop{
    private $datiUser;

    private $product;

}

class prodotti{
    private $nome;

    private $img;
    
    private $descrizioneProdotto;

    private $prezzo;

    private $recensione;

    public function __construct($nome, $img, $descrizioneProdotto, $prezzo, $recensione){

        $this -> nome = $nome;
        $this -> img = $img;
        $this -> descrizioneProdotto = $descrizioneProdotto;
        $this -> prezzo = $prezzo;
        $this -> recensione= $recensione;

    }

}

class articolo extends  prodotti {

}

$chitarra = new prodotti ( 'fender', 'img', 'é un chitarra famosa usata da personaggi famosi', ' euro 2000', ' voto 5') ;

//parte utente

echo $chitarra -> nome;
echo $chitarra -> img;
echo $chitarra -> descrizioneProdotto;
echo $chitarra -> prezzo;
echo $chitarra -> recensione;


?>