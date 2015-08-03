<?php

require_once 'includes/global.inc.php';

$userTools = new UserTools();
$userTools->logout();

header("Location: pagina1.php");

?>