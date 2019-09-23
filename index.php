<?php
  class Persona {
    use FullName;

    private $nome;
    private $cognome;
    private $indirizzo;


    public function __construct($nome, $cognome, $indirizzo)
    {
      $this -> nome = $nome;
      $this -> cognome = $cognome;
      $this -> indirizzo = $indirizzo;

    } 


    public function toString()
    { 
      return 'Persona-> Nome: ' . $this -> nome
              . ', Cognome: ' . $this -> cognome
              . ', Indirizzo: ' . $this-> indirizzo;
    }
  }

  trait FullName{
    public function getFullName()
    {
      return $this -> nome . ' ' . $this -> cognome ;
    }
  }

  class Studente extends Persona{

    private $progDiStudi;
    private $tasse;

    public function __construct($nome, $cognome, $indirizzo, $progDiStudi, $tasse)
    {
      parent::__construct($nome, $cognome, $indirizzo);
      $this -> progDiStudi = $progDiStudi;
      $this -> tasse = $tasse;
    }

    public function toString()
    {
      return parent::toString() . ', '
              .'Programma di studi: ' . $this -> progDiStudi
              .', Tasse: ' . $this-> tasse;
    }
  }

  class Professore extends Persona{
    
    private $specializzazzione;
    private $paga;


    public function __construct($nome, $cognome, $indirizzo, $specializzazzione, $paga)
    {
      parent::__construct($nome, $cognome, $indirizzo);
      $this-> specializzazzione = $specializzazzione;
      $this-> paga = $paga;
    }

    public function toString()
    {
      return parent::toString() . ', '
              .'Specializzazione: ' . $this -> specializzazzione
              .', Paga: ' . $this-> paga;
    }
  }

  $miaPersona = new Persona('Edoardo', 'Dambrosio', 'Via XX Sett.');
  echo $miaPersona ->toString() .'<br>';
  echo $miaPersona ->getFullName() .'<br>';

  $mioStudente = new Studente('Marco', 'DeAngelis', 'via Abruzzo', 'Medicina', '300€');
  echo $mioStudente -> toString() .'<br>';
  echo $mioStudente  ->getFullName() .'<br>';

  $mioProfessore = new Professore('Matteo', 'Dinoi', 'Via Roma', 'Chirurgo', '4000€');
  echo $mioProfessore ->toString() .'<br>';
  echo $mioProfessore ->getFullName() .'<br>';
?>