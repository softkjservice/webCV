<?php
$opis="<p class='opisTyt'>Ulubione sklepy</p>";
if (file_exists('ulubioneSklepy.txt'))
{
	$tablica = file('ulubioneSklepy.txt');
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