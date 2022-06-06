<?php 
	$nome = 10;
	$nome2 = '10';

	if($nome == $nome2) {
		echo "execute tal ação";
	}


	//verifica se os caores são identicos, ou seja, verifica se o numero 10 é igual a string '10', e retorna falso.
	if($nome === $nome2){
		echo "verdade";
	} else {
		echo "não são identicos";
	}

	//o mesmo com diferente.
	if($nome !== $nome2){
		echo "verdade";
	}

	

?>