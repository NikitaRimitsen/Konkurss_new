<?php
$serverinimi = 'localhost';
$kasutajanimi = 'nikitarim';
$parool = '123456';
$andmebaasinimi = 'nikitarim';
$yhendus = new mysqli($serverinimi, $kasutajanimi,
    $parool, $andmebaasinimi);
$yhendus->set_charset('UTF8');
/*CREATE TABLE konkurss(
    id int primary key AUTO_INCREMENT,
    nimi varchar(50),
    pilt text,
    lisamisaeg datetime,
    punktid int default 0,
    kommentaar text,
    avalik int default 1)*/
?>
