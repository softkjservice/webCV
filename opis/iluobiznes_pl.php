<?php
$opis="<p class='opisTyt'>www.iluobiznes.pl</p>";
if (file_exists('iluobiznes_pl.txt'))
{
	$tablica = file('iluobiznes_pl.txt');
}else{
	$tablica=["Brak opisu"];
}

foreach ($tablica as $tekst){
	//echo "$tekst <br>";
	$opis.="$tekst <br>";
}
$opis.="<br><a href='http://www.iluobiznes.pl' target='_blank'>Link do strony</a>	";
$opis.="<br><a href='https://github.com/softkjservice/ListaTowarow' target='_blank'>Zobacz na GitHubie</a><br>	";
echo $opis;

?>