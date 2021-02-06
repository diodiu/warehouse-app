<?php
function my_autoload ($pClassName) {
    $pClassName = str_replace('\\', '/', $pClassName);
    include(__DIR__ . "/" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

use Controller\AppController;

$appController = new AppController();
?>

<html lang="ro">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Warehouse</title>
    </head>
<body>
    <ul class="nav nav-tabs">
        <li class="active"><a class="btn btn-primary" href="index.php">Acasa</a></li>
        <li><a class="btn btn-primary" href="Views/Risk.php">Secvente de accident</a></li>
        <li><a class="btn btn-primary" href="Views/ProtectionZones.php">Zone de protectie</a></li>
    </ul>
</body>
</html>