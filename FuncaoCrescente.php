<?php
  $array = array(-17, -5, 1, 2, 3, 12, 43, 45);
  function verificaSucessor($arrayR){
    for($i=0; $i<(count($arrayR)-1);$i++){
      if ($arrayR[$i+1] <= $arrayR[$i]){
        return $i;
      }
    }
    return -1;
  }
  
  function retiraElemento($_array){
    $indice = verificaSucessor($_array);
    array_splice($_array, $indice, 0);
   // print_r($_array);
    
    if (verificaSucessor($_array) == -1){
      return 'true';
    }
    else{
      return 'false';
    }
  }
  
  print_r(retiraElemento($array));
  
?>