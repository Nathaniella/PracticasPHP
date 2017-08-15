<body>
<?php
function problema2($array_nombres, $array_buscar) {
 	
	$tam2 = count($array_nombres);
	

	for($j=0 ; $j<$tam2; $j++){	
		$a = $array_nombres[$j];
				
		if($a== $array_buscar){
			echo("<br>el elemento $array_buscar esta en la pos $j");
			
		}else{
			echo("<br>el elemento $array_buscar NO esta");
			
		};
	
	}
}
?>
<h1>Buscar nombres</h1>

<?php
//llamado a la funcion
$nombres= array('Yerika', 'Naco', 'Karina', 'Cuacao', 'Montiono', 'Tuesa', 'Amaranta', 'Kataniapo', 'Turumai');
$buscar = array('Kataniapo', 'Iyanara', 'Naco');
$t = count($buscar);

for($p = 0; $p<$t; $p++){
	problema2($nombres, $buscar[$p]);
}
?>
</p>
</body>

