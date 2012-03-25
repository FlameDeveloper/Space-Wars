<?php
?>

<html>
    <head>
        <title>Spacewars</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <img src="images/space_wars.jpg" alt="background image" id="bg" />
        <div id="content">
            <div id="headline">Space Wars</div>
                <form action="formvalidator.php" method="post">
                    <p class="form-multi-text">
                        <label for="firstname">Name</label>
                        <?php if ($attributes["firstname"]["valid"] = false) { ?>
                        <? } ?>
                        <? //= ($a)?(" class='error'"):("") ?>
                        <!-- TODO: Bedingung schreiben und an die richtige Stelle im Code -->
                        <input type="text" name="firstname" id="firstname" />
                        <input type="text" name="lastname" id="lastname" />
                        <?// foreach($msges as $msg) { ?>
                        <?//= $msg ?><br/>
                        <?// } ?>
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
                    <p class="form-text">
                        <label for="email">E-Mail-Adresse</label>
                        <input type="text" name="email" id="email" />
                    </p>
                    <p class="form-checkbox">
                        <input type="checkbox" name="terms_of_service" id="terms_of_service"  />
                        <label for="terms_of_service">
                            Ich stimme den Nutzungsbedingungen von Space Wars zu und habe die
                            Datenschutzbestimmungen gelesen.
                        </label>
                    </p>
                    <p class="form-buttons">
                        <input type="submit" value="Registrieren" />
                    </p>
            </form>
        </div>
    </body>
</html>