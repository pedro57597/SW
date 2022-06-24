<?php 
// incluir arquivo de conexão sempre que precisar acessar o SGBD
include_once 'conecta.php';

// consultar SQL que será executada na base de dados
$sql = "SELECT * FROM alunos";

// armazena o resultado da consulta
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0){
    //saida de dados de cada linha da tabela 
    while($linha = mysqli_fetch_assoc ($resultado)){
        echo "id: " . $linha["id"]."<br>";
        echo "nome: " . $linha["nome"]."<br>";
        echo "curso: " . $linha["curso"]."<br>";
        echo "idade: " . $linha["idade"]."<br>";
}
}  else {
    echo"0 resultados";
}

// fechar a conexao
mysqli_close($conexao);

?>