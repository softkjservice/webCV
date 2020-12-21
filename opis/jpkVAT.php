<?php
$opis="<p class='opisTyt'>Generator plików JPK VAT</p>";
if (file_exists('jpkVAT.txt'))
{
	$tablica = file('jpkVAT.txt');
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