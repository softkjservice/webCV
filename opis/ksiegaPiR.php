<?php
$opis="<p class='opisTyt'>Księga Przychodów i Rozchodów dla biur rachunkowych</p>";
if (file_exists('ksiegaPiR.txt'))
{
	$tablica = file('ksiegaPiR.txt');
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