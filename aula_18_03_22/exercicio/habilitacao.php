<?php
   $idade = 15;
   $habilitacao = TRUE;

   if($idade>=18){
       //comando para verdadeiro

       if($habilitacao == TRUE){
        //comando para verdadeiro
        echo"APROVADO, Tudo Certo, Você Pode Dirigir! :)";
        $habilitacao = "Sim";
    }
   }

   else{
       //comando para falso
       echo"REPROVADO, Você Não Deveria Estar Dirigindo! :(";
       $habilitacao = "Não";
   }
       
       echo" <br>";
       echo"Sua idade é: $idade <br>";
       echo"Tem habilitação: $habilitacao <br>";
       echo" <br>";

?>