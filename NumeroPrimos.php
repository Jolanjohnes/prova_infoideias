<?php
  
  Function VerificaPrimo($num){
    for ($i=2; $i<$num; $i++){
      if ($num%$i == 0){
        return 0;
      }
    }
    return 1;
  }
  
  Function Primo($incio, $fim){
   $arrayPrimos = array();
    for ($i=($incio+1); $i<$fim; $i++){
      if (VerificaPrimo($i)==1){
        array_push($arrayPrimos, $i);
      }
    }
    
    return $arrayPrimos;
  }
  
  print_r(Primo(10,29));
?>