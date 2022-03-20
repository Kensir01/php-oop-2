<?php

  class user {

    public $nome;
    public $cognome;
    public $email;

    public function __construct($nomeUtente, $cognomeUtente, $emailUtente) {
      $this->nome = $nomeUtente;
      $this->cognome = $cognomeUtente;
      $this->email = $emailUtente;
    }
  }
?>