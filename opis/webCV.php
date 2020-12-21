<?php
$opis="<p class='opisTyt'>webCV</p>";
if (file_exists('webCV.txt'))
{
	$tablica = file('webCV.txt');
}else{
	$tablica=["Brak opisu"];
}

foreach ($tablica as $tekst){
	//echo "$tekst <br>";
	$opis.="$tekst <br>";
}
$opis.="<br><a href='http://www.iluobiznes.pl/demo/cv/' target='_blank'>Link do webCV</a>	";
$opis.="<br><a href='https://github.com/softkjservice/ListaTowarow' target='_blank'>Zobacz na GitHubie</a><br>	";
echo $opis;

?>