<?php

// Neue Seite: Benutzer kann all seine Eingaben sehen.
//    * Dabei wird kein Formular ausgegeben
//    * Keine Validierung der Daten

//if($_POST) {
//    print_r($_POST);
//}


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

?>
<!doctype html>
<html>
    <head>
        <title>Space Wars verification</title>
        <link rel="stylesheet" type="text/css" href="css/style2.css"/>
    </head>
    <body>
        <img src="images/space_wars.jpg" alt="background image" id="bg"/>

        <div id="content">
            <div id="headline">Space Wars</div>
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
                        <?= $months[$birth_month - 1] ?>
                        <?= $_POST['birth_year'] ?></dd>
                    <dt>Geschlecht</dt>
                    <dd><?= $_POST['sex'] ?></dd>
                    <dt>E-Mail-Adresse</dt>
                    <dd><?= $_POST['email'] ?></dd>
                    <dt>Nutzungsbedingungen</dt>
                    <dd>
                        <? if ($_POST['terms_of_service'] == "on") { ?>
                        Akzeptiert
                        <? } else { ?>
                        Nicht Akzeptiert
                        <? } ?>
                    </dd>
                </dl>
                <form action="signup_accomplished.php" method="post">
                <input type="hidden" name="firstname" value="$_POST['firstname']">
                <input type="hidden" name="lastname" value="$_POST['lastname']">
                <input type="hidden" name="username" value="$_POST['username']">
                <input type="hidden" name="birth_day" value="$_POST['birth_day']">
                <input type="hidden" name="birth_year" value="$_POST['birth_year']">
                <input type="hidden" name="sex" value="$_POST['sex']">
                <input type="hidden" name="email" value=$_POST['email']>
                <input type="submit" value="Best&auml;tigen">
                </form>
            </div>
        </div>
    </body>
</html>
