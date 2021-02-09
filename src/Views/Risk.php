<?php
function my_autoload ($pClassName) {
    $pClassName = str_replace('\\', '/', $pClassName);
    include(__DIR__ . "/../" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

use Controller\AccidentController;
use Model\AnswerModel;
use Model\RiskModel;

session_start();

$appController = new AccidentController();
$view = $appController->accidentSequences();
?>
<html lang="ro">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Warehouse</title>
    </head>
<body>
    <ul class="nav nav-tabs justify-content-center">
        <li class="ml-3"><a class="btn btn-primary" href="../index.php">Acasa</a></li>
        <li class="active ml-3"><a class="btn btn-primary" href="Risk.php">Secvente de accident</a></li>
        <li class="ml-3"><a class="btn btn-primary" href="ProtectionZones.php">Zone de protectie</a></li>
    </ul>

    <form action="" method="POST">
        <table class="table table-hover">
            <?php
                echo $view->printRiskHeaders();
                echo $view->printRiskRows();
            ?>
        </table>
        <input type="submit" value="Continua" name="add" class="btn btn-success">
    </form>
</body>
</html>

<?php
if(isset($_POST['add'])) {
    $yeses = $_POST['yes'] ? $_POST['yes'] : [];
    $nos = $_POST['no'] ? $_POST['no'] : [];
    $riskAnswers = [];

    foreach ($yeses as $yes) {
        $riskAnswers[] = new RiskModel($yes, true);
    }
    foreach ($nos as $no) {
        $riskAnswers[] = new RiskModel($no, false);
    }

    $answerModel = (new AnswerModel())
        ->setRiskAnswers($riskAnswers);
    $_SESSION['answerModel'] = $answerModel;

    echo "
        <script type='text/javascript'>
            window.location.href = 'Measure.php'
        </script>
    ";
}
?>
