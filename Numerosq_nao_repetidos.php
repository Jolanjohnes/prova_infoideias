<?php
	
	function geraNumeros(){
	  $numerosSorteados = array();
	  for($i=0; $i<20; $i++){
	    $numero = rand(1,10);
	    echo " " .$numero;
	    array_push($numerosSorteados,$numero );
	  }
	  return $numerosSorteados;
	}
	
	function verificaUnicos(){
	  $ArraySorteados = geraNumeros();
	  $Unicos = array();
	  
	foreach(array_count_values($ArraySorteados) as $keys => $values ){
	  if ($values == 1){
	    array_push($Unicos, $keys);
	    //echo "este não repete - " .$keys;
	  }
	}
	
	return $Unicos;
	}
	
	print_r(verificaUnicos());
	
	
?>