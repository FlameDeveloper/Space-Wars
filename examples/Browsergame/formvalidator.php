<?php

$attributes = array(
    "firstname" => array(
        "valid" => true,
        "msg" => array()
    ),
    "lastname"  => array(
        "valid" => true,
        "msg" => array()
    ),
    "username"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "password"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "birth_day"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "birth_month"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "birth_year"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "sex"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "area_code"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "mobile"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "email"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "location"  => array(
    "valid" => true,
    "msg" => array()
    ),
    "terms_of_service"  => array(
    "valid" => true,
    "msg" => array()
    )
);


$error= false;
if($_POST) {

    $firstname = $_POST['firstname'];
    $firstname_length = strlen($firstname); //kk
    if(!(3 <= $firstname_length and $firstname_length <= 30)) {
        $attributes["firstname"]["valid"] = false;
        array_push($attributes["firstname"]["msg"], 'Die Eingabe des Vornamens ist nicht nachvollziehbar.');
        $error = true;
    }
    $lastname = $_POST['lastname'];
    $lastname_length = strlen($lastname); //kk
    if(!(3 <= $lastname_length and $lastname_length <= 30)) {
        $attributes["lastname"]["valid"] = false;
        array_push($attributes["lastname"]["msg"], 'Die Eingabe des Nachnamens ist nicht nachvollziehbar.');
        $error = true;
    }

    $username = $_POST['username'];
    $username_length = strlen($username);
    if(!(4 <= $username_length and $username_length <= 30)) {
    $attributes["username"]["valid"] = false;
    array_push($attributes["username"]["msg"], 'Die Eingabe des Benutzernamen hat die falsche Länge.');
        $error = true;
    }

    //function username_unique($username) { return true; }
    //if(!(username_unique($username)))
    //$attributes["username"]["valid"] = false;
    //array_push($attributes["username"]["msg"], 'Der Username ist bereits vergeben.');

    if(!($_POST['password'] == $_POST['password_confirmation']
       and "" != $_POST['password'])) {
    $attributes["password"]["valid"] = false;
    array_push($attributes["password"]["msg"], 'Die Eingabe des Passwortes ist nicht nachvollziehbar.');
        $error = true;
    }

    $birth_day = (Integer)$_POST['birth_day'];
    if(!(1 <= $birth_day and $birth_day <= 31)) {
    $attributes["birth_day"]["valid"] = false;
    array_push($attributes["birth_day"]["msg"], 'Die Eingabe des Geburtstages ist nicht nachvollziehbar.');
    $error = true;
    }

    $birth_month = (Integer)$_POST['birth_month'];
    if(!(1 <= $birth_month and $birth_month <= 12)) {
    $attributes["birth_month"]["valid"] = false;
    array_push($attributes["birth_month"]["msg"], 'Die Eingabe des Geburtsmonates ist nicht nachvollziehbar.');
        $error = true;
    }

    $birth_year = (Integer)$_POST['birth_year'];
    if (!(1900 <= $birth_year and $birth_year <= 2012)) {
    $attributes["birth_year"]["valid"] = false;
    array_push($attributes["birth_year"]["msg"], 'Die Eingabe des Geburtsjahres ist nicht nachvollziehbar.');
        $error = true;
    }

    $sex = $_POST['sex'];
    if(!('male' == $sex or 'female' == $sex or '' == $sex)) {
    $attributes["sex"]["valid"] = false;
    array_push($attributes["sex"]["msg"], 'Die Eingabe des Geschlechts ist nicht nachvollziehbar.');
        $error = true;
    }

    $email = $_POST['email'];
    $email_length = strlen($email);
    if(!(8 <= $email_length and $email_length <= 50)) {
    $attributes["email"]["valid"] = false;
    array_push($attributes["email"]["msg"], 'Die Eingabe der E-mail ist nicht nachvollziehbar.');
        $error = true;
    }

   // $terms_of_service = $_POST['terms_of_service'];
   // $terms_of_service = $terms_of_service == 'on';
   // if(!($terms_of_service)) {
   // $attributes["terms_of_service"]["valid"] = false;
   // array_push($attributes["terms_of_service"]["msg"], 'Die Eingabe der Nutzuungsbedingungen ist nicht nachvollziehbar.');
   //     $error = true;
   // }

    //foreach($attributes as $name => $attribute) // lol
    //    if($attribute["valid"] == false )
    //        $error = true;
    if($error) {    // so
        require 'signup.php';
    } else {
        require 'signup_check.php';
    }
}


?>