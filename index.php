<?php


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



$chitarra = new prodotti ( 'fender', 'img', 'é un chitarra famosa usata da personaggi famosi', ' euro 2000', ' voto 5') ;


echo $chitarra -> nome;
echo $chitarra -> img;
echo $chitarra -> descrizioneProdotto;
echo $chitarra -> prezzo;
echo $chitarra -> recensione;
//parte utente

class user {

    protected $nome;
  
    protected $cognome;
  
    protected $indirizzo;
  
    protected $telefono;

    protected $email;

    protected $fattura;

    public function __construc($nome,$cognome,$indirizzo,$telefono,$email,$fattura){
  
    $this ->nome =$nome;
    $this ->cognome =$cognome;
    $this ->indirizzoFatturazione =$indirizzo;
    $this ->telefono =$telefono;
    $this ->email =$email;
    $this ->fattura =$fattura;

    }
  
  }

  class creditcard{
      
  }

?>