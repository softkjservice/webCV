<?php
$opis="<p class='opisTyt'>Data Colector Interface</p>";
if (file_exists('kolektorDanych.txt'))
{
	$tablica = file('kolektorDanych.txt');
}else{
	$tablica=["Brak opisu"];
}

foreach ($tablica as $tekst){
	//echo "$tekst <br>";
	$opis.="$tekst <br>";
}
$opis.="<h4>Ze względu na wykorzystywane procedury szyfrowania klucza tekst źródłowy na GitHubie został okrojony.</h4>";
$opis.="<a href='https://github.com/softkjservice/ListaTowarow' target='_blank'>Zobacz na GitHubie</a><br>	";
echo $opis;

?>