<?php 

  class prodotto {

    //attributi comuni a tutti i prodotti
    public $nomeProdotto;
    public $prezzoProdotto;
    public $categoriaProdotto;
    public $brandProdotto;
    public $sconto = 0;

    public function __construct($nomeProd, $prezzoProd, $categoriaProd, $brandProd) {
      
      $this->nomeProdotto = $nomeProd;
      $this->prezzoProdotto = $prezzoProd;
      $this->categoriaProdotto = $categoriaProd;
      $this->brandProdotto = $brandProd;

    }

  }

?>