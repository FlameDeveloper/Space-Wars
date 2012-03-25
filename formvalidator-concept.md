# Formvalidator Concept

* index.php             -> formular
* signup.php            -> Anzeige der Daten, wenn alles korrekt
* formvalidator.php     -> Validatorlogik

formular
-> Validatorlogik
   (fehlerhaft) -> formular mit Fehlern anzeigen
   (korrekt)    -> Anzeige der Daten

index.php
-> formvalidator.php
  (fehlerhaft)  -> laden von index.php
                   $errors
  (korrekt)     -> laden von singup.php

1. Formularumleitung aendern
2. Formvalidator.php
 * fuer jedes Feld:
   => Array
   [Hash]
   * name
     => String
   * valide
     => Boolean
   * fehlermeldung(en)
     => Array[String]


 * fuer exakt ein Formular:
   * valide
