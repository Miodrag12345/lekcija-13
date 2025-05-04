<?php

$baza=mysqli_connect("localhost","root","","domacizadatak13");
if(mysqli_connect_error())
{
    die("Desila se greska prilikom konektovanja na bazu podataka");
}

if (!isset($_POST['cena']) || empty ($_POST['cena']))
{
    die("Niste uneli cenu patike");
}

if (!isset($_POST['kolicina']) || empty ($_POST['kolicina']))
{
    die("Niste uneli kolicinu patika");
}

if (!isset($_POST['datum_nabavke']) || empty ($_POST['datum_nabavke']))
{
    die("Niste uneli datum_nabavke patike");
     
}

if (!isset($_POST['vrsta']) || empty ($_POST['vrsta']))
{
    die("Niste uneli vrstu patike");
     
}

$cena=$_POST['cena'];
$kolicina=$_POST['kolicina'];
$datum_nabavke=$_POST['datum_nabavke'];
$vrsta=$_POST['vrsta'];

$baza-> query("INSERT INTO patike (cena, kolicina , datum_nabavke, vrsta) VALUE($cena,$kolicina,'$datum_nabavke' , '$vrsta')");






?>