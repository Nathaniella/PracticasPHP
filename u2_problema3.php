<!Doctype>
<title> u2_problema3.php</title>
<?php
function localizarNombres($array_nombres, $array_buscar) {
    $vBus = count($array_buscar);

    for($i = 0 ; $i < $vBus ; $i++) {
         $n = localizar_Nombre($array_buscar[$i], $array_nombres);
	 if($n >= 0) 
		echo("<br> El nombre $array_buscar[$i] se encuentra en la posición $n del arreglo");
         else 
		echo("<br>El nombre $array_buscar[$i] no esta");
	 
            
    }    
}
function localizar_Nombre($value, $array) {
    $vArr = count( $array);
 
    for($i = 0; $i < $vArr ; $i++) {
        if ($array[$i] == $value) {
            return $i;
        }
    }
    return -1;
}


?>
<?php
$nombres = array('Yerika', 'Naco', 'Karina', 'Cuacao', 'Montiono', 'Tuesa', 'Amaranta', 'Kataniapo', 'Turumai');
$busqueda = array('Kataniapo', 'Iyanara', 'Naco');
localizarNombres($nombres, $busqueda);
?>






