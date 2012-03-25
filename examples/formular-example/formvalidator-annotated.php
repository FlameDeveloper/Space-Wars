<?php

$birth_day = $_POST['birth_day'];
$birth_year = $_POST['birth_year'];

if($_POST) {
    // Die Bedingung besagt, dass es genau dann einen Fehler gibt, wenn
    //  - Passwort ungleich Passwort-Widerholung
    //  - UND(!) Es ist kein Passwort eingegeben
    // Fehler: Die Eingabe ist dann fehlerhaft, wenn eine der beiden
    // Bedingungen eintritt und nicht, wenn beide eintreten.
    // Loesung?
    // das "and" ändern in or?!
    if($_POST['password'] != $_POST['password_confirmation'] or "" == $_POST['password']) {
        echo 'Ihre Passwort Eingabe ist fehlerhaft.';
    }

    // Die Bedingung besagt, dass es genau dann einen Fehler gibt, wenn
    //  - 0 ist groesser als Geburtsdatum (<=>Geburtsdatum ist kleiner 0)
    //  - UND(!) 32 ist kleiner als Geburtsdatum (<=> Geburtsdatum ist groesser als 32)
    // Sekunde
    // wir haben noch mehr probleme!.. denn der Fehler tritt auf, wenn birth_day>32,
    // es ist aber auch schon Fehlerhaft, wenn wir 32 oder 0 eintippen.
    // Wie machen wir das in Mathe? wenn wir alle Zahlen von 1-32 haben wollen.
    // Wandle mal das Interval |1,32| um gogo in eine Bedingung:
    // hier! Variable ist x
    // 0 < x < 32
    // Was muss bei a und b hin? 0 32?!
    // Die Aussage ist nur dann wahr, wenn x eine natuerliche Zahl ist
    // Wir muesste also zusaetzlich zu der Bedingung ueberpruefen, ob es eine
    // Ganzzahl ist oder einfach in eine konvertieren.
    // Sprich $neu = (Integer)$alt;
    // Das sind einfach zwei Variablen. Alt ist die Varaible die wir umwandeln wollen
    // und neu ist eine andere Variable in der wir unser Ergebniss speichern.
    // Konkretes Beispiel $birth_day = (Integer)$_POST['birth_day'];
    // Jetzt klar? jo:)
    //
    // Alternative (immer wahr):
    // 1 <= x <= 31
    // Klar?
    //
    // Nun welche Loesung ist nun besser? Integer ueberpruefen oder <=.
    // Antwort? Keine.
    // Die optimale Variante ist die Kombination beider Ideen.
    // Wir wandeln in einen Integer und dann vergleichen wir mit <=.
    // Genau deswegen, weil die Logik simpler und besser verstaendlich ist.
    // Denn wir stellen damit genau ein Intervall dar und nicht irgendwelche +1/-1
    // Zahlen.
    // Klar? jo
    // Praktische Loesung?
    // Beachte: du brauchst kein or
    // hm
    $birth_day = (Integer)$_POST['birth_day'];
    if (1 <= $birth_day and $birth_day <= 31) { // Oh php kanns nicht, sry =P brauchst doch das and!
        // Du hast jetzt hier die Bedingung, damit das Geburtsdatum valide, also richtig wird
        // Man faengt meist mit der positiven Bedingung an, du kannst zwar auch die Bedingung
        // umschreiben, aber dein Argument hier sollte immer sein, welche Zeile Code kann ich
        // am schnellsten und fehlerfreisten LESEN
        // und ein simples Intervall ist hier die simpelste Variante.
        // Nun in so einem Fall schreiben wir die Bedingung anders!
    }   else {
        echo 'Die Eingabe des Geburtstages ist nicht nachvollziehbar.';
    }

    if(not(1 <= $birth_day and $birth_day <= 31))
        echo 'Die Eingabe des Geburtstates ist nicht nachvollziehbar.';
    // Nun hier gibt es noch ein Problem:
    // Und zwar die Aussage in der Nachricht. Sie ist nicht spezifisch.
    // Die Frage die ich hier stellen wuerde ist, was bedeutet nachvollziehbar
    // fuer den Benutzer. Beachte den Fall, dass der Benutzer sich vertippt haben
    // koennte. Wie findet der Benutzer das nun raus? Es ist nicht immer der Fall
    // vorhanden, dass der Benutzer einfach irgendeine zufaellige Zahl eingegeben hat.
    // Folglich:
    // Der Geburtstag muss zwischen 1 und 31 liegen.
    // Oder allgemeiner:
    // Bitte geben Sie ein valides Datum ein.
    // Du brauchst hier nicht Geburtstag/monat/jahr explizit einzeln betrachten.
    // Aber dazu spaeter mehr!

    // Nun wieder eine Gegenbedingung, Okay, aber! Schwer zu lesen
    // Ausserdem wollen wir nur den Fehlerfall betrachten
    if (not(1900 <= $birth_year and $birth_year <= 2012))
        echo 'Die Eingabe des Geburtsjahres ist nicht nachvollziehbar.';
    // Klar, warum das simpler ist? Es ist klarer und übersichtlicher.
    // Wenn du programme schreibst, dann schreibst du sie IMMER, damit es einfach
    // zu warten, erweiterbar, flexibel und schnell zu lesen ist. IMMER
    // selbst wenn es noch 3% schneller laufen wuerde. Du schreibst es nicht so!
    //
}

?>