<?php
try{
    $pdo= new PDO("mysql:host=localhost; dbname=cadastro", "root", "JesuseoMessias");
}
catch (PDOException $e){
    echo$e->getMessage();
}
$buscausuario= $pdo->query("SELECT *  FROM usuarios WHERE id>'0'");
//echo $buscausuario->rowCount();
/*
while ($linha = $buscausuario->fetch(PDO::FETCH_ASSOC)) {
    // aqui eu mostro os valores de minha consulta
    echo "Nome: {$linha['nome']} - Usuario: {$linha['usuario']}<br />";
}
*/
?>