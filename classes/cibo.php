<?php

class cibo extends prodotto {

    public $animale;
    public $etaAnimale;
    public $dataDiScandenza;

    public function setAnimale($tipoAnimale) {
      return $this->animale= $tipoAnimale;
    }

    public function setEta($eta) {
      return $this->etaAnimale = $eta;
    }

    public function setScadenza($scadenza) {
      return $this->dataDiScandenza = $scadenza;
    }

    // Controllo sconto
    public function getSconto($valoreSconto) {
    
      if ($this->sconto !== $valoreSconto) {
        $this->sconto = 20;
      }
      
      if ($this->sconto == 20) {
        $this->prezzoProdotto =  $this->prezzoProdotto - (($this->prezzoProdotto / 100) * 20);
      }
    
    }

  }

?>