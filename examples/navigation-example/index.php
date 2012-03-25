<?php

/* Navigation mit PHP */
/**
 * Navigation
 *  - hat viele Navigationselement(e)  [Quellcode]
 *
 * Navigationselement
 *  - Titel         [Quellcode]
 *  - Link          [Quellcode]
 *  - selected?     [Laufzeit]
 */

$navigation = array();      // Navigation
$navigation[] = array(
    "title" => "Suchen",
    "id"    => "search",
    "default" => true
    //"link"  => "index.php?page=search"
);
$navigation[] = array(
    "title" => "Bilder",
    "id"    => "images"
//    "link"  => "index.php?page=images"
);
$navigation[] = array(
    "title" => "Videos",
    "id"    => "videos"
//    "link"  => "index.php?page=videos"
);
$navigation[] = array(
    "title" => "Maps",
    "id"    => "maps"
//    "link" => "index.php?page=maps"
);

// $_GET["page"]
// Welche ist unsere aktuelle Seite?

$has_selected = false;
foreach($navigation as &$element) {
    if(isset($_GET["page"]) and $_GET["page"] == $element["id"]) {
        // aktuelle Seite
        $element["selected"] = true;
        $has_selected = true;
    } else {
        $element["selected"] = false;
    }
}
// ---
if(!$has_selected) {
    foreach($navigation as &$element) {
        if(isset($element["default"])) {
            $element["selected"] = true;
        }
    }
}

/**
 * Mögliche Designentscheidungen für selected?:
 *
 * Analyse:
 *  selected? repräsentiert das Element, dessen link mit der
 *  aktuellen URL übereinstimmt.
 *
 * Stärken:
 *  - Seiten können eindeutig identifiziert werden
 *  - vergleich ist simpel
 * Schwäche:
 *  - unflexibel
 *  - was ist, wenn man zwei oder mehrere URL für einen Navigationseintrag hat
 *  - weitere Parameter unmöglich
 *  - keine Standardseite
 *
 * Alternative Lösung erarbeiten:
 *  selected? repräsentiert das Element, dessen id mit der
 *  Get-Variable page übereinstimmt, oder das default-Element.
 *
 * Stärken:
 *  - Seiten können eindeutig identifiziert werden
 *  - vergleich ist simpel
 *  - beliebige Parameter möglich
 *  - Standardseite
 * Schwächen:
 *  - unflexibel (begrenzt auf ein PHP-Programm;
 *      begrenzt auf eine Variable)
 *  - was ist, wenn man zwei oder mehrere URL für einen Navigationseintrag hat
 *  - Komplexität bei der Standardseite
 */

?>
<html>
    <head>
        <title>Testpage</title>
        <link rel="stylesheet" type="text/css" href="../css/navigation.css">
    </head>
    <body>
        <h1>&Uuml;berschrift</h1>
        <p>
            <b>Das hier ist ein fetter Text.</b>
        </p>
        <div style="margin-left: 5em;">
            <ul id='navigation' class="clearfix">
                <?php

// Navigation zeichnen
foreach($navigation as &$element) {
  $title = $element['title'];
  $link  = "index.php?page=" . $element['id'];
  $selected = $element['selected'];
  if($selected) {
      echo "<li class='selected'><a href=\"$link\">$title</a></li>";
  } else {
      echo "<li><a href=\"$link\">$title</a></li>";
  }
}

                ?>
            </ul>
        </div>
        <p>
            <b>Das hier ist ein fetter Text.</b>
        </p>
    </body>
</html>