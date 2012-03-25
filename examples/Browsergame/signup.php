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
                        <?php if (!$attributes["firstname"]["valid"]) { ?>
                        <div id="error">*Die Eingabe Ihres Vornamens ist nicht nachvollziehbar.</div>
                        <? } ?>
                        <input type="text" name="firstname" id="firstname" />
                        <?php if (!$attributes["lastname"]["valid"]) { ?>
                        <div id="error">*Die Eingabe Ihres Nachnamens ist nicht nachvollziehbar.</div>
                        <? } ?>
                        <input type="text" name="lastname" id="lastname" />
                        <?// foreach($msges as $msg) { ?>
                        <?//= $msg ?><br/>
                        <?// } ?>
                    </p>
                    <p class="form-text">
                        <label for="username">Nutzernamen w&auml;hlen</label>
                        <?php if (!$attributes["username"]["valid"]) { ?>
                        <div id="error">*Die Eingabe Ihres Benuternamens ist nicht nachvollziehbar.</div>
                        <? } ?>
                        <input type="text" name="username" id="username" />
                    </p>
                    <p class="form-password">
                        <label for="password">Passwort erstellen</label>
                        <?php if (!$attributes["password"]["valid"]) { ?>
                        <div id="error">*Die Eingabe Ihres Passwortes ist nicht nachvollziehbar.</div>
                        <? } ?>
                        <input type="password" name="password" id="password" />
                    </p>
                    <p class="form-password">
                        <label for="password_confirmation">Passwort best&auml;tigen</label>
                        <?php if (!$attributes["password_confirmation"]["valid"]) { ?>
                        <div id="error">*Die wiederholte Passworteingabe entspricht nicht der vorherigen.</div>
                        <? } ?>
                        <input type="password" name="password_confirmation" id="password_confirmation" />
                    </p>
                    <p class="form-date">
                        <label for="birth_day">Geburtsdatum</label>
                        <?php if (!$attributes["birth_day"]["valid"]) { ?>
                        <div id="error">*Die Eingabe des Geburtstages ist nicht nachvollziehbar.</div>
                        <? } ?>
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
                        <?php if (!$attributes["birth_year"]["valid"]) { ?>
                        <div id="error">*Die Eingabe Ihres Geburtsjahres ist nicht nachvollziehbar.</div>
                        <? } ?>
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
                        <?php if (!$attributes["firstname"]["valid"]) { ?>
                        <div id="error">*Die Eingabe der Email-Adresse ist nicht nachvollziehbar.</div>
                        <? } ?>
                        <input type="text" name="email" id="email" />
                    </p>
                    <p class="form-checkbox">
                        <?php if (!$attributes["firstname"]["valid"]) { ?>
                        <div id="error">*Sie müssen den Nutzungsbedingungen zustimmen.</div>
                        <? } ?>
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