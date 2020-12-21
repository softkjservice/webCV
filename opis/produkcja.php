<?php
$opis="<p class='opisTyt'>Program produkcyjny P_Firma</p>";
if (file_exists('produkcja.txt'))
{
	$tablica = file('produkcja.txt');
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