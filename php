<?php
$nome=$_POST['nome'];

$riga= "Nome:$nome\n";
file_put_contents("risposte.txt",$riga,FILE_APPEND);

echo "Dati salvati con successo!";
?>
