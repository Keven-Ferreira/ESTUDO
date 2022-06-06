<?php

	//Laços de repetição
	
	/*for($contador = 0; $contador<10; $contador++){
		$contador1 = $contador + 1;
		echo "olá mundo $contador1";
		echo "<hr>";
	}*/
	
	/*$contador = 0;
	while($contador < 10){
		echo 'alo mundo '.$contador;
		echo '<hr>';
		$contador++;
	}*/

	$contador = 0;
	do{
		echo "olá mundo $contador";
		echo "<br />";
		$contador++;
	}while ($contador < 10);

?>