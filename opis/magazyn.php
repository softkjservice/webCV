<?php
$opis="<p class='opisTyt'>Program magazynowy M_Firma</p>";
if (file_exists('magazyn.txt'))
{
	$tablica = file('magazyn.txt');
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