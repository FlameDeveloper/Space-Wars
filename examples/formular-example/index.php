<?php

//require "formvalidator.php";


?>

<html>
    <head>
        <title>Neues Life-Konto erstellen</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="form">
            <form action="formvalidator.php" method="post">
                <p class="form-multi-text">
                    <label for="firstname">Name</label>
                    <?= ($a)?(" class='error'"):("") ?>

                    <!-- TODO: Bedingung schreiben und an die richtige Stelle im Code -->
                    <input type="text" name="firstname" id="firstname" />
                    <input type="text" name="lastname" id="lastname" />
                    <? foreach($msges as $msg) { ?>
                        <?= $msg ?><br/>
                    <? } ?>
                    <!-- TODO: Bedingung schreiben und optional mit CSS formatieren -->
                    <!-- TODO: fuer jedes Feld -->
                </p>
                <p class="form-text">
                    <label for="username">Nutzernamen w&auml;hlen</label>
                    <input type="text" name="username" id="username" />
                </p>
                <p class="form-password">
                    <label for="password">Passwort erstellen</label>
                    <input type="password" name="password" id="password" />
                </p>
                <p class="form-password">
                    <label for="password_confirmation">Passwort best&auml;tigen</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" />
                </p>
                <p class="form-date">
                    <label for="birth_day">Geburtsdatum</label>
                    <input type="text" name="birth_day" id="birth_day" />
                    <select name="birth_month" id="birth_month">
                        <option value="1">Januar</option>
                        <option value="2">Februar</option>
                        <option value="3">M&auml;rz</option>
                        <option value="4">April</option>
                        <option value="5">Mai</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Dezember</option>
                    </select>
                    <input type="text" name="birth_year" id="birth_year" />
                </p>
                <p class="form-select">
                    <label for="sex">Geschlecht</label>
                    <select name="sex" id="sex">
                        <option value="">Ausw&auml;hlen ...</option>
                        <option value="male">M&auml;nnlich</option>
                        <option value="female">Weiblich</option>
                    </select>
                </p>
                <p class="form-phone">
                    <label for="area_code">Mobiltelefon</label>
                    <select name="area_code" id="area_code">
                        <option value="+49">+49&nbsp;</option>
                        <option value="+44">+44&nbsp;</option>
                        <option value="+45">+45&nbsp;</option>
                    </select>
                    <input type="text" name="mobile" id="mobile" />
                </p>
                <p class="form-text">
                    <label for="alt_email">Alternative E-Mail-Adresse</label>
                    <input type="text" name="alt_email" id="alt_email" />
                </p>
                <p class="form-select">
                    <label for="location">Standort</label>
                    <select name="location" id="location">
                        <option value="germany">Deutschland</option>
                        <option value="england">England</option>
                    </select>
                </p>
                <p class="form-checkbox">
                    <input type="checkbox" name="terms_of_service" id="terms_of_service"  />
                    <label for="terms_of_service">
                        Ich stimme den Nutzungsbedingungen von Life zu und habe die
                        Datenschutzbestimmungen gelesen.
                    </label>
                </p>
                <p class="form-checkbox">
                    <input type="checkbox" name="terms_of_privacy" id="terms_of_privacy"  />
                    <label for="terms_of_privacy">
                        Life darf meine Kontoinformationen f&uuml;r personalisierte
                        +1-Empfehlungen in Inhalten und Anzeigen auf Websites
                        Dritter verwenden.
                    </label>
                </p>
                <p class="form-buttons">
                    <input type="submit" value="Registrieren" />
                </p>
            </form>       <!--  -->
        </div>
    </body>
</html>