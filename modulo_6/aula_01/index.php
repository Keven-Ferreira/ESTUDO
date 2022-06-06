<?php 
	
	//Como percorrer um array
	$arr = array('João','Guilherme','felipe','mário');
	
	/*foreach ($arr as $key => $value) {
			echo $key.' => '.$value.'<hr>';
		}	
		*/

		$total = count($arr);

		for($i = 0; $i <$total; $i++){
			echo "$i => $arr[$i] <hr>";
		}
?>