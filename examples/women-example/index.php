<?php

/*
 * Aufgabe:
 *
 * Erstelle eine dynamische Liste von Frauen, die die
 * Attribute Typ, Name und Bewertung (1-5) haben.
 * Hierbei beachte alle Regeln von HTML+CSS und benutzte
 * zur Darstellung Tabellen!
 *
 * Zeitlimit: 30min
 */

$women   = array();
$women[] = array(
    "type"      => "Blonde Frau",
    "name"      => "Jana",
    "rating"    => "1"
);
$women[] = array(
    "type"      => "Brunette Frau",
    "name"      => "Julia",
    "rating"    => "2"
);
$women[] = array(
    "type"      => "Blauhaarige Frau",
    "name"      => "J&uuml;rgenia",
    "rating"    => "5"
);
$women[] = array(
    "type"      => "Blonde Frau",
    "name"      => "Walde",
    "rating"    => "4"
);
$women[] = array(
    "type"      => "Rothaarige Frau",
    "name"      => "Zorra",
    "rating"    => "1"
);

/*
$women_count = count($typ);

foreach($typ as $key => &$value) {
    if("fucking_awesome" == $value['id']) {
        echo $value['title'] . "=";
        echo "Nice girl!" . "<br/>";
    }
    else {
        echo $value['title'] . "=";
        echo "Noob!" . "<br/>";
    }

}
*/

?>
<html>
    <head>
        <title>Beautiful Women</title>
    </head>
    <body>
<?php
  //
//foreach($women as $type) {


?>
        <table>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Rating</th>
            </tr>
<?php                         //    0.o
            
foreach($women as &$woman) {
   
?>
            <tr>

                <td>
                    <? echo $woman['name']; ?>
                </td>
                <td>
                    <? echo $woman['type']; ?>
                </td>
                <td>
                    <? echo $woman['rating']; ?>
                </td>
            </tr>
<?php
}
?>
        </table>
        <!-- Fuck no more time-->
    </body>
</html>