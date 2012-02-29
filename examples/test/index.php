<?php

$typ   = array();
$women = array($typ);
$typ[] = array(
    "title" => "Schöne Frau",
    "id"    => "beautiful_woman"
    );
$typ[] = array(
    "title" => "Palla",
    "id"    => "nice_girl"
);
$typ[] = array(
    "title" => "Ty´s Freundin",
    "id"    => "fucking_awesome"
);
$typ[] = array(
    "title" => "Schwarze Frau",
    "id"    => "just_black"
);

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

?>