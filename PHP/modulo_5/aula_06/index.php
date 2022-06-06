<?php
	/*ARRAYS

	Pode ser adicionado o vários valores, e a variável vai crecendo conforme a necessidade de incersão de mais dados.

	Existem várias maneiras de se declarar o array no php:
	$nome = array(1,3,'Guilherme', true, 'etc...');
	Este é o jeito mais fácil, tendo em vista que a leitura se torna mais fluida e dinâmica.

	$nome[] = 'João';
	$nome[] = 'Guilherme'; 

	Neste caso o PHP já sabe que a cada vez que for criado uma nova declaração de array, ele ira atribuir o próximo index a ele.

	$nome[0] = 'Keven';

	Neste caso podemos definir qual a posição que queremos colocar o dado no array, podendo colocar qualquer valor, independente do índice anterior não existir.

	Outra maneira de declarar arrays no PHP é:
	$variáveis = ['Keven', 'Danilo', 'Álias'];	

	Na declaração do array, o indice não precisa ser obrigatoriamente um numero, pode se colocar uma string como índice.
	$informacao['nome'] = 'Keven';
	$informacao['idade'] = '23';
	$informacao[cidade] = 'Florianópolis';
	*/	
	

	$nome = array('Guilherme', 'João', 'Felipe');

	echo $nome[0] .' '.$nome[1] .' '.$nome[2];

	$loco[] = 'Keven, o gatão.';
	echo '<br />';
	echo $loco[0];
	echo '<br />';
	$definir[1] = 'Keven111';
	echo $definir[1];
	echo '<br />';
	$variaveis = ['Keven', 'Danilo', 'Álias'];
	echo $variaveis[0] . $variaveis[1] . $variaveis[2];
	echo '<br />';

	$informacao['nome'] = 'Keven';
	$informacao['idade'] = 23;
	$informacao['cidade'] = 'Florianópolis';

	echo '<br />';
	echo $informacao['nome'];
	echo '<br />';
	echo $informacao['idade'];
	echo '<br />';
	echo $informacao['cidade'];

?>