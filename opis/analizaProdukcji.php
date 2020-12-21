<?php
$opis="<p class='opisTyt'>Analiza produkcji</p>";
if (file_exists('analizaProdukcji.txt'))
{
	$tablica = file('analizaProdukcji.txt');
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