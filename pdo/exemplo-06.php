<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = ?");

$id = 3; 

$stmt->execute(array($id));
echo "dados excluidos com sucesso<br>";
$conn->rollback();

echo "rollback voltou ";




?>