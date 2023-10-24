<?php

// andmed

$db_server = "localhost";
$db_andmebaas = "sevastijan";
$db_kasutaja = "sevastijan";
$db_salasona = "1234";

// ühendus andmebaasiga
$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

// ühenduse kontroll
if (!$yhendus) {
    die("Ei saa ühendust andmebaasiga");
}

$yhendus->set_charset('UTF8');