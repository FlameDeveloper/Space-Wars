<?php

/*$error = array(
    "name" => "",           //eindeutig
    "valid" => false,
    "msg" => array(
        "unbekannter Fehler."
    )
);

$errors = array(

);

// finde alle Fehler fuer Feld firstname
foreach($errors as $error) {
    if($error["name"] == "firstname") {
        // alle Fehlermeldungen sind in $error["msg"]
    }
}

$errors = array(
    "firstname" => array(
        "valid" => false,
        "msg" => array(
            "unbekannter Fehler"
        )
    )
);

$errors["firstname"]["msg"];*/

$attributes = array(
    "firstname" => array(
        "valid" => true,
        "msg" => array()
    )
    "lastname"  => array(
        "valid" => true,
        "msg" => array()
    )
    "username"  => array(
    "valid" => true,
    "msg" => array()
    )
    "password"  => array(
    "valid" => true,
    "msg" => array()
    )
    "birth_day"  => array(
    "valid" => true,
    "msg" => array()
    )
    "birth_month"  => array(
    "valid" => true,
    "msg" => array()
    )
    "birth_year"  => array(
    "valid" => true,
    "msg" => array()
    )
    "sex"  => array(
    "valid" => true,
    "msg" => array()
    )
    "area_code"  => array(
    "valid" => true,
    "msg" => array()
    )
    "mobile"  => array(
    "valid" => true,
    "msg" => array()
    )
    "alt_email"  => array(
    "valid" => true,
    "msg" => array()
    )
    "location"  => array(
    "valid" => true,
    "msg" => array()
    )
    "terms_of_service"  => array(
    "valid" => true,
    "msg" => array()
    )
);



if($_POST) {

    // Bedingungen Vorname:
    //  - nur string(nur buchstaben)
    //   => keine Zahlen
    //   ... sekunde> Es kann aber dann heißen: jo
    //  - mind. 3 buchstaben shortcut?
    //  - max. 30
    //  kp wie ich buchstabenanzahlen definiere nein^^
    $firstname = $_POST['firstname'];
    $firstname_length = strlen($firstname); //kk
    if(!(3 <= $firstname_length and $firstname_length <= 30)) {
        $attributes["firstname"]["valid"] = false;
        array_push($attributes["firstname"]["msg"], 'Die Eingabe des Vornamens ist nicht nachvollziehbar.');
    }
    //TODO: hier fehlen die restlichen Felder
    //    echo 'Die Eingabe des Vornamens ist nicht nachvollziehbar.';

    $lastname = $_POST['lastname'];
    $lastname_length = strlen($lastname); //kk
    if(!(3 <= $lastname_length and $lastname_length <= 30))
        $attributes["lastname"]["valid"] = false;
        array_push($attributes["lastname"]["msg"], 'Die Eingabe des Nachnamens ist nicht nachvollziehbar.');

    // Bedingungen Benutzername:
    //  - string jo riskant
    //  - enthaelt keine ' ' <<
    //  - mind 4 buchstaben
    //  - max. 30
    //  - nicht schon vorhanden
    // unzwar: du hattest mir nen fachbegriff genannt für wie man "...@....de" macht.
    // Damit würde ich auch punkt 2 machen. Heißt nochmal? k
    $username = $_POST['username'];
    $username_length = strlen($username);
    if(!(4 <= $username_length and $username_length <= 30))
    $attributes["username"]["valid"] = false;
    array_push($attributes["username"]["msg"], 'Die Eingabe des Benutzernamen hat die falsche Länge.');

    function username_unique($username) { return true; }
    if(!(username_unique($username)))
    $attributes["username"]["valid"] = false;
    array_push($attributes["username"]["msg"], 'Der Username ist bereits vergeben.');

    if(!($_POST['password'] == $_POST['password_confirmation']
       and "" != $_POST['password']))
    $attributes["password"]["valid"] = false;
    array_push($attributes["password"]["msg"], 'Die Eingabe des Passwortes ist nicht nachvollziehbar.');

    $birth_day = (Integer)$_POST['birth_day'];
    if(!(1 <= $birth_day and $birth_day <= 31))
    $attributes["birth_day"]["valid"] = false;
    array_push($attributes["birth_day"]["msg"], 'Die Eingabe des Geburtstages ist nicht nachvollziehbar.');

    $birth_month = (Integer)$_POST['birth_month'];
    if(!(1 <= $birth_month and $birth_month <= 12))
    $attributes["birth_month"]["valid"] = false;
    array_push($attributes["birth_month"]["msg"], 'Die Eingabe des Geburtsmonates ist nicht nachvollziehbar.');

    $birth_year = (Integer)$_POST['birth_year'];
    if (!(1900 <= $birth_year and $birth_year <= 2012))
    $attributes["birth_year"]["valid"] = false;
    array_push($attributes["birth_year"]["msg"], 'Die Eingabe des Geburtsjahres ist nicht nachvollziehbar.');

    // Geschlecht Bedingungen:
    //  - string
    //  - Exakt einen der folgenden Werte: male, female, ''
    // Wandeln wir die Werte in sinnvolle Werte um? (interpolation)
    //  => bugs ignorieren (der benutzer macht richtige eingaben und sieht falsche
    //     resultate evtl. und keiner merkts)
    // Ignorieren wir falsche Werte und geben eine Fehlermeldung aus?
    //  => kann durch das UI nicht erstellt werden, d.h. Hacker oder Bug
    // herausfinden ob es ein string ist?
    // $_POST['sex'] => string jojjooo
    $sex = $_POST['sex'];
    if(!('male' == $sex or 'female' == $sex or '' == $sex))
    $attributes["sex"]["valid"] = false;
    array_push($attributes["sex"]["msg"], 'Die Eingabe des Geschlechts ist nicht nachvollziehbar.');

    // Mobiltelefon (area-code) Bedingung
    //  - string
    //  - '+' gefolgt von ganzen Zahlen (2Ziffern) (RegExp)
    //  - Exakt einen der folgenden Werte: +49, +45, +44  ne höre ich nicht

    $area_code = $_POST['area_code'];
    if(!('+49' == $area_code or '+45' == $area_code or '+44' == $area_code))
    $attributes["area_code"]["valid"] = false;
    array_push($attributes["area_code"]["msg"], 'Die Eingabe der Vorwahl ist nicht nachvollziehbar.');

    // Mobiltelefon (mobile) Bedingungen
    //  - string
    //  - Vorwahl + Telefonnummer (getrennt durch ' ')
    //   - Vorwahl mind. 3Ziffern
    //   - Nummer mind. 2Ziffern
    //  => mind. 6Zeichen   Ich nicht. Wehe du legst auf! "ICH HAB LUST :D:D:D Go"^^
    // ich zocke nicht mehr. ich arbeite als hobby^^
    $mobile= $_POST['mobile'];
    $mobile_length = strlen($mobile);
    $attributes["mobile"]["valid"] = false;
    array_push($attributes["mobile"]["msg"], 'Die Eingabe der Telefonnummer ist nicht nachvollziehbar.');

    $alt_email = $_POST['alt_email'];
    $alt_email_length = strlen($alt_email);
    if(!(8 <= $alt_email_length and $alt_email_length <= 50))
    $attributes["alt_email"]["valid"] = false;
    array_push($attributes["alt_email"]["msg"], 'Die Eingabe der E-mail ist nicht nachvollziehbar.');

    $location = $_POST['location'];
    if(!('germany' == $location or 'england' == $location or '' == $location))
    $attributes["location"]["valid"] = false;
    array_push($attributes["location"]["msg"], 'Die Eingabe des Standortes ist nicht nachvollziehbar.');

    // Checkbox
    //  - string
    //  - on(true)/off(false) => Boolean
    //  - nix

    $terms_of_service = $_POST['terms_of_service'];
    $terms_of_service = $terms_of_service == 'on';
    if(!($terms_of_service))
    $attributes["terms_of_service"]["valid"] = false;
    array_push($attributes["terms_of_service"]["msg"], 'Die Eingabe der Nutzuungsbedingungen ist nicht nachvollziehbar.');

    $terms_of_privacy = $_POST['terms_of_privacy'];
    $terms_of_privacy = $terms_of_privacy == 'on';

    // repräsentiert, ob wir mindestens einen Fehler haben
    // * wir setzen diese Variable jedes mal, wenn wir einen Fehler erstellen
    // * wir ueberpruefen nachtraeglich, ob mindestens ein Fehler existiert
    //  * $attributes
    //  * $attributes[$name]["valid"] == false => einen Fehler auf dem Feld $name haben
    $error = false;
    foreach($attributes as $name => $attribute) // lol
        if($attribute["valid"] == false )
            $error = true;
    if($error) {    // so
        require 'index.php';
    } else {
        require 'signup.php';
    }
}


?>