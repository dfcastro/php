<?php

require_once("config.php");

$sql = new Sql();

$usuario = $sql->select("select * from tb_usuarios order by deslogin");

$headers = array();

foreach ($usuario[0] as $key => $value) {

    array_push($headers, ucfirst($key));
}
$file = fopen("usuario.csv", "w+");

fwrite($file, implode(",", $headers). "\n");

foreach ($usuario as $row) {

    $data = array();

    foreach ($row as $key => $value) {
        array_push($data, $value);
    }

    fwrite($file, implode(",",$data). "\n");
}

fclose($file);


?>