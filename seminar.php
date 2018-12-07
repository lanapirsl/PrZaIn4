<?php
$ime=$_GET['ime'];
$prezime=$_GET['prezime'];
$email=$_GET['email'];
$contact=array(
    array($ime, $prezime,$email)
    );
$datoteka=fopen("contact.txt","a");
if($datoteka){
    foreach($contact as $row) {
        foreach($row as $cell) {
           fwrite($datoteka,"    $cell");
        }

    }
    fwrite($datoteka,"\r\n");
    fclose($datoteka);
}
