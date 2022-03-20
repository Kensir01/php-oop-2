<?php

  class cartaDiCredito {
  
    public $nomeCarta;
    public $cognomeCarta;
    public $scadenzaMese;
    public $scadenzaAnno;

    public function getNomeCarta($nome) {
    
      return $this->nomeCarta = $nome;
    
    }

    public function getCognomeCarta($cognome) {

      return $this->cognomeCarta = $cognome;

    }

    public function getScadenzaMese($ScadenzaMese) {

      return $this->scadenzaMese = $ScadenzaMese;

    }

    public function getScadenzaAnno($scadenzaAnno) {

      return $this->scadenzaAnno = $scadenzaAnno;

    }

    public function controlloScadenza() {
    
      $scadenza = DateTime::createFromFormat('m-y', $this->scadenzaMese. '-'. $this->scadenzaAnno);
      $dataAttuale = new DateTime();

      if ($scadenza < $dataAttuale) {

        echo 'Attenzione: La carta di credito inserita è scaduta!';

      }

    }
  
  }

?>