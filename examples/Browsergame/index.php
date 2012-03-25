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
                    Hier <a href='signup.php'>registrieren !</a>
                    <p>
                        <label for="username">Benutzername</label>
                        <input type="text" name="username" id="username" />
                    </p>
                    <p>
                       <label for="password">Passwort</label>
                       <input type="password" name="password" id="password" />
                    </p>
                    <p class="form-buttons">
                       <input type="submit" value="Login" />
                    </p>
            </form>
        </div>
    </body>
</html>