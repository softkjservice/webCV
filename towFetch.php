<?php
require( 'ssp.class.php' );
require('../Apka_01_safe/setup.php');
$table = 'towary';
$primaryKey = 'id';
$columns = array(
		array( 'db' => 'id', 'dt' => 'id' ),
		array( 'db' => 'nazwa', 'dt' => 'nazwa' ),
		array( 'db' => 'indeks',  'dt' => 'indeks' ),
		array( 'db' => 'ilosc',   'dt' => 'ilosc' ),
		array( 'db' => 'jm',     'dt' => 'jm' ),
		array( 'db' => 'cena',     'dt' => 'cena' ),
		array(  'db' => 'kod',     'dt' => 'kod' ),
				);



echo json_encode(
		SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
		);
//$where = "Status ='Unread'";
//echo json_encode(
//		SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns,$where )
//		);
		
?>