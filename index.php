<?php
class prodotti{
    public $nome;

    public $img;
    
    public $descrizioneProdotto;

    public $prezzo;

    public $recensione;

    public function __construct($nome, $img, $descrizioneProdotto, $prezzo, $recensione){

        $this -> nome = $nome;
        $this -> img = $img;
        $this -> descrizioneProdotto = $descrizioneProdotto;
        $this -> prezzo = $prezzo;
        $this -> recensione= $recensione;

    }

}

class musical extends prodotti {

}
class shose extends prodotti {

}
class glass extends prodotti {

}

//parte utente

class user {

    protected $nome;
  
    protected $cognome;
  
    protected $indirizzo;
  
    protected $telefono;

    protected $email;

    protected $fattura;

    protected $carrello=[];


    public function __construct($nome,$cognome,$indirizzo,$telefono,$email,$fattura){
  
    $this ->nome =$nome;
    $this ->cognome =$cognome;
    $this ->indirizzo =$indirizzo;
    $this ->telefono =$telefono;
    $this ->email =$email;
    $this ->fattura =$fattura;

    }
    //parte funzione di aquisto utente

    public function addShops($prodotti){
        $this->carrello[] = $prodotti;
    }
    public function getProducts() {
        return $this->$prodotti;
      }
  
  }

  class creditCard{
    protected $nomeAzienda;

    protected $nomeUser;

    protected $scadenza;
  
    protected $cv;

    public function __construct($nomeAzienda,$nomeUser,$scadenza,$cv){
    
      $this ->nomeAzienda =$nomeAzienda;
      $this ->nomeUser =$nomeUser;
      $this ->scadenza =$scadenza;
      $this ->cv =$cv;
   
  
      }
  }
  $chitarra = new musical ( 'fender', 'img', 'é un chitarra famosa usata da personaggi famosi', ' euro 2000', ' voto 5') ;


//   echo $chitarra -> nome;
//   echo $chitarra -> img;
//   echo $chitarra -> descrizioneProdotto;
//   echo $chitarra -> prezzo;
//   echo $chitarra -> recensione;

  //parte di aquisto utente
  $shopUser = new user('mario','rossi','via Colombo','340*****03','marioògmail.com','fat-12455-658/3-tutto-sempbre!');

  $shopUser -> addShops($chitarra);

  var_dump($shopUser);


  
?>

