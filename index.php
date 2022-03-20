<?php

  require __DIR__. '/classes/product.php';
  require __DIR__. '/classes/cibo.php';
  require __DIR__. '/classes/giocattolo.php';
  require __DIR__. '/classes/accessori.php';
  require __DIR__. '/classes/user.php';
  require __DIR__. '/classes/cartaDiCredito.php';

  $cibo = new cibo('Croccantini', 8, 'cibo', 'Friskies');
  $giocattolo = new giocattolo('Tira Graffi', 8, 'giocattolo', 'Friskies');
  $accessori = new accessori('Amaca', 35, 'Cuccia', 'Pet Friend');
  $user = new user('Pippo', 'Baudo', 'pippobaudo@email.it');
  $cartaDiCredito = new cartaDiCredito();

  //Sezione Carta di credito
  $cartaDiCredito->getNomeCarta('Pippo');
  $cartaDiCredito->getCognomeCarta('Baudo');
  $cartaDiCredito->getScadenzaMese('07');
  $cartaDiCredito->getScadenzaAnno('25');

  // Controllo se la carta è effettivamente scaduta 
  $cartaDiCredito->controlloScadenza();

  //Sezione Cibo
  $cibo->setAnimale('Gatto');
  $cibo->setEta(8);
  $cibo->setScadenza('23 febbraio 2026');
  $cibo->getSconto($user->discount);

  //Sezione giocattolo
  $giocattolo->setAnimale('Gatto');
  $giocattolo->getSconto($user->discount);

  //Sezione Accessori
  $accessori->setAnimale('Cane');
  $accessori->getSconto($user->discount);

?>