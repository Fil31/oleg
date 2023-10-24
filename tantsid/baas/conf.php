<?php
$serverinimi="localhost"; //d70420.mysql.zonevs.eu
$kasutajanimi="sevastijan";
$parool="1234";
$andmebaas="sevastijan";
$yhendus=new mysqli($serverinimi, $kasutajanimi, $parool, $andmebaas);
$yhendus->set_charset('UTF8');

if (!$yhendus) {
    die("Ei saa ühendust andmebaasiga");
}