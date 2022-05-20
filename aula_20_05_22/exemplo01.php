<?php 
  $teste = [10,'oi',1.6,true];
  //$teste = array(10,'oi',1.6,true);
  //echo $teste[1];

  $qtde = count($teste);
  echo "num de elementos no vetor: $qtde";
  echo "<hr>";

  for ($i=0;$i<$qtde;$i++){
    echo "valor do i = $i / valor: $teste[$i]<br>";
  }
  echo "<hr>";
  $numero_qualquer = (rand(1,10))/10;
  //$resultado = $numero_qualquer/10;
  echo "Um numero qualquer: $numero_qualquer";
  echo "<hr>";
  $vetor = [1,5,8,10];
  $n = count($vetor);
  $soma = 0;
  for ($a=0;$a<$n;$a++){
    $soma = $soma + $vetor[$a];
    } 
  echo "A soma dos vetores:$soma";  
  echo "<hr>";
  $vetor = [1,5,8,10];
  $n = count($vetor);
  $soma = 0;
  for ($a=0;$a<$n;$a++){
    $soma = $soma + $vetor[$a]/4;
    } 
  echo  "A media dos vetores:$soma"; 

?>