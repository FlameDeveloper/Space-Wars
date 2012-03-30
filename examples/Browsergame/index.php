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
            <form action="index.php" method="post">
                    <p>
                        <div id="signup_link">
                            Hier <a href='signup.php'>Registrieren !</a>
                        </div>
                    </p>
                    <p>
                        <label for="username">Benutzername</label>
                        <?php if ($_POST and !$_POST["username"] == "admin") { ?>
                        <div id="error">*Der eingegebene Benutzername existiert nicht.</div>
                        <? } ?>
                        <input type="text" name="username" id="username" />
                    </p>
                    <p>
                       <label for="password">Passwort</label>
                        <?php if ($_POST and !$_POST["password"]== "passwort") { ?>
                        <div id="error">*Das eingegebene Passwort ist falsch.</div>
                        <? } ?>
                       <input type="password" name="password" id="password" />
                    </p>
                    <p>
                       <input class="form-buttons-accept" type="submit" value="Login" />
                    </p>
            </form>
        </div>
    </body>
</html>

<?php

if($_POST and $_POST["username"] == admin and $_POST['password'] == passwort) {
    header("Location: game.php");
}

?>