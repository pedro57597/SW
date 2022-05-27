<?php 
    echo "1- Função sem retorno e sem parametros <br>";
    function teste(){
      echo "Pedro";
  }
    teste();
    echo "<hr>";
//--------------------------------------------------------//
    echo "2- Função com retorno e sem parametros <br>";
    function teste2(){
      $retorno ="PH";
      return $retorno;
  }
    $recebe = teste2();
    echo "$recebe <br>";
    echo "<hr>";
//--------------------------------------------------------//
    echo "3- Função sem retorno e com parametros <br>";
    function teste3($a){
      echo "$a <br>";
    }
    teste3('Oi PH');
    teste3('Oi RAYYY');
    teste3('Oi LEHHHH');
    teste3('Oi TETEU');
    teste3('Oi SAMPAS');
    teste3('Oi PEDROO');
    teste3('Oi SAMISS');
    teste3('Oi MARYY');
    teste3('Oi MAYYY');
    teste3('Oi ARIIIIII');
    teste3('Oi LALAAA');
    teste3('Oi GABIIIII');
    teste3('Oi LULUU');
    teste3('Oi DAYYY');
    teste3('Oi JUUUU');
    teste3('Oi NERYY');
    teste3('Oi CADUU');
    teste3('Oi MEEEE');
    echo "<hr>";

//--------------------------------------------------------//
    echo "4- Função com retorno e com parametros <br>";
    function teste4($x,$y){
       $soma = $x + $y;
       return $soma;
       
   }
    $resultado = teste4(10,20);
    echo "A soma é: $resultado";
     echo "<hr>";
?>