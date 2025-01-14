<?php

session_id('ti2iuq2fqohjguo7o0nbp21');
require_once("config.php");
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>