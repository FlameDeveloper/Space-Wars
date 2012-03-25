<?php

// Neue Seite: Benutzer kann all seine Eingaben sehen.
//    * Dabei wird kein Formular ausgegeben
//    * Keine Validierung der Daten

//if($_POST) {
//    print_r($_POST);
//}

require "formvalidator.php";



$birth_month = (int)$_POST['birth_month'];
$months = array(
    "Januar",
    "Februar",
    "März",
    "April",
    "Mai",
    "Juni",
    "Juli",
    "August",
    "September",
    "Oktober",
    "November",
    "Dezember"

);
$terms_of_privacy = (boolean) $_POST['terms_of_privacy'];
$terms = array(
    "Abgelehnt",
    "Akzeptiert"

);

?>
<!doctype html>
<html>
    <head>
        <title>Neues Life-Konto erstellen</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="form_check">
            <h1>&Uuml;berpr&uuml;fung der Daten</h1>
            <dl>
                <dt>Vorname</dt>
                <dd><?= $_POST['firstname'] ?></dd>
                <dt>Nachname</dt>
                <dd><?= $_POST['lastname'] ?></dd>
                <dt>Benutzername</dt>
                <dd><?= $_POST['username'] ?></dd>
                <dt>Geburtstag</dt>
                <dd><?= $_POST['birth_day'] ?>.
                    <?= $months[$birth_month-1] ?>
                    <?= $_POST['birth_year'] ?></dd>
                <dt>Geschlecht</dt>
                <dd><?= $_POST['sex'] ?></dd>
                <dt>Mobiltelefon</dt>
                <dd><?= $_POST['mobile'] ?></dd>
                <dt>Alternative E-Mail-Adresse</dt>
                <dd><?= $_POST['alt_email'] ?></dd>
                <dt>Standort</dt>
                <dd><?= $_POST['location'] ?></dd>
                <dt>Nutzungsbedingungen</dt>
                <dd>
                    <? if($_POST['terms_of_service'] == "on") { ?>
                        Akzeptiert
                    <? } else { ?>
                        Nicht Akzeptiert
                    <? } ?>
                </dd>
                <dt>Konto-Personalisierung</dt>
                <dd><?= $terms[$terms_of_privacy] ?></dd>
            </dl>
        </div>
    </body>
</html>

<?php

?>