<?php
$opis="<p class='opisTyt'>Rozliczanie delegacji</p>";
if (file_exists('delegacja.txt'))
{
	$tablica = file('delegacja.txt');
}else{
	$tablica=["Brak opisu"];
}

foreach ($tablica as $tekst){
	//echo "$tekst <br>";
	$opis.="$tekst <br>";
}
$opis.="<br><a href='https://github.com/softkjservice/ListaTowarow' target='_blank'>Zobacz na GitHubie</a><br>	";
echo $opis;

?>