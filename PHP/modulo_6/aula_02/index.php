<?php 
	
	//array 
	
	$arr = ['guilherme', 'joão'];
	$arr1 = array('guilherme', 'chave 2');
	

	$arr[0] = 'guilhereme';
	$arr[1] = 'joão';

	//array multidimensional

	//$arr2 = array(array('guilherme','joão'), array(23,45));

	//$arr2[0] = array('chave'=>'guilherme','joão');

	$arr2[0]['chave'] = 'GUILHERME';

	echo $arr2[0]['chave'];
?>