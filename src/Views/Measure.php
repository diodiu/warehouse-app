<?php
function my_autoload ($pClassName) {
    $pClassName = str_replace('\\', '/', $pClassName);
    include(__DIR__ . "/../" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");
session_start();

use Controller\AppController;
use Model\MeasureModel;

$appController = new AppController();
$view = $appController->accidentSequences();

?>
<html lang="ro">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Warehouse</title>
</head>
<body>
<ul class="nav nav-tabs">
    <li><a class="btn btn-primary" href="../index.php">Acasa</a></li>
    <li class="active"><a class="btn btn-primary" href="Risk.php">Secvente de accident</a></li>
    <li><a class="btn btn-primary" href="ProtectionZones.php">Zone de protectie</a></li>
</ul>

<form action="Technique.php" method="POST">
    <table class="table table-hover">
        <?php
        echo $view->printMeasureHeaders();
        echo $view->printMeasureRows();
        ?>
    </table>
    <input type="submit" value="Continua" name="add" class="btn btn-success">
</form>
</body>
</html>

<?php
if(isset($_POST['add'])) {
    $yeses = $_POST['yes'] ?? [];
    $nos = $_POST['no'] ?? [];
    $measureAnswers = [];

    foreach ($yeses as $yes) {
        $measureAnswers[] = new MeasureModel($yes, true);
    }
    foreach ($nos as $no) {
        $measureAnswers[] = new MeasureModel($no, false);
    }

    $_SESSION['measureAnswers'] = $measureAnswers;
}
