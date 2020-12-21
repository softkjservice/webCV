<?php
$opis="<p class='opisTyt'>Lista Płac dla biur rachunkowych</p>";
if (file_exists('listaPlac.txt'))
{
	$tablica = file('listaPlac.txt');
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