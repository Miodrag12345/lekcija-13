<?php

$baza=mysqli_connect("localhost","root","","prvi_cas");
if(mysqli_connect_error())
{
    die("Desila se greska prilikom konektovanja na bazu podataka");
}

if(!isset($_POST['ime_proizvoda']) || empty($_POST['ime_proizvoda']))// sa empty proveravamo da li je polje prazno nase koje smo definisali za bazu podataka prilikom kucanja
{
    die("Niste uneli ime proizvoda!");
}

if(!isset($_POST['opis']) || empty($_POST['opis']))// sa empty proveravamo da li je polje prazno nase koje smo definisali za bazu podataka prilikom kucanja
{
    die("Niste uneli opis proizvoda!");
}

if(!isset($_POST['cena']) || empty($_POST['cena']))// sa empty proveravamo da li je polje prazno nase koje smo definisali za bazu podataka prilikom kucanja
{
    die("Niste uneli cenu proizvoda!");
}

if(!isset($_POST['kolicina']) || empty($_POST['kolicina']))// sa empty proveravamo da li je polje prazno nase koje smo definisali za bazu podataka prilikom kucanja
{
    die("Niste uneli kolicinu proizvoda!");
}

if(!isset($_POST['dan_nabavke']) || empty($_POST['dan_nabavke']))// sa empty proveravamo da li je polje prazno nase koje smo definisali za bazu podataka prilikom kucanja
{
    die("Niste uneli dan_nabavke proizvoda!");
}

$imeProizvoda=$_POST['ime_proizvoda'];
$opis=$_POST['opis'];
$cena=$_POST['cena'];
$kolicina=$_POST['kolicina'];
$danNabavke=$_POST['dan_nabavke'];
$q="INSERT INTO proizvodi(ime,opis,cena,kolicina,dan_nabavke) VALUES('$imeProizvoda' , '$opis' , $cena, $kolicina,'$danNabavke' )";
$baza->query($q);









?>
