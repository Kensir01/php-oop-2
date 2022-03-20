<?php

class giocattolo extends prodotto {

    public $animale;

    public function setAnimale($tipoAnimale) {
      return $this->animale= $tipoAnimale;
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