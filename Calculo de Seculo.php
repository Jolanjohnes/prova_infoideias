<?php
  
  Function SeculoAno($ano){
    $qtd = strlen($ano);
    if(intval(substr($ano, $qtd-2, 2))>0){
      return  intval(substr($ano, 0, $qtd-2))+1;
    }else{
      return  intval(substr($ano, 0, $qtd-2));
    }
  }
  
  print(SeculoAno(100));
?>