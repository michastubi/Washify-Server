<?php

$post = $_POST["string"];
if($post == "null"){
    exit;
}

$string = $post . "\n";

$file = 'sub.txt';
// Öffnet die Datei, um den vorhandenen Inhalt zu laden
$current = file_get_contents($file);
// Fügt eine neue Person zur Datei hinzu
$current .= $string;
// Schreibt den Inhalt in die Datei zurück
file_put_contents($file, $current);

?>


