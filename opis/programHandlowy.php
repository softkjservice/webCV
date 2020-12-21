<?php
$opis="<p class='opisTyt'>Program handlowy SH_Firma</p>";
if (file_exists('programHandlowy.txt'))
{
	$tablica = file('programHandlowy.txt');
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