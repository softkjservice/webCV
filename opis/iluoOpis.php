<?php
$opis="<p class='opisTyt'>iluoOpis - wtyczka</p>";
if (file_exists('iluoOpis.txt'))
{
	$tablica = file('iluoOpis.txt');
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