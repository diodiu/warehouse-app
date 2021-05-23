<?php
function my_autoload ($pClassName) {
    $pClassName = str_replace('\\', '/', $pClassName);
    include(__DIR__ . "/../" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

use Controller\AccidentController;
use files\Files;
use Model\AnswerModel;

session_start();

$appController = new AccidentController();
/** @var AnswerModel $answerModel */
$answerModel = $_SESSION['answerModel'];
?>
<html lang="ro">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>RESICEX</title>
</head>
<body>
    <ul class="nav nav-tabs justify-content-center">
        <li class="ml-3"><a class="btn btn-primary" href="../index.php">Acasa</a></li>
        <li class="active ml-3"><a class="btn btn-primary" href="Risk.php">Secvente de accident</a></li>
        <li class="ml-3"><a class="btn btn-primary" href="ProtectionZones.php">Zone de protectie</a></li>
    </ul>
    <?php
    foreach ($appController->getRiskFiles($answerModel) as $riskTreeFile) {
        $symbol = $riskTreeFile->getRows()[0]->getSymbol();
    ?>
        <div class='d-flex justify-content-center border-bottom mb-3'>
            <h1><?php echo $symbol; ?></h1>
        </div>

        <div class='d-flex justify-content-around'>
            <div class='align-self-start col-sm-4'>
                <table class='table table-hover'>
                    <?php echo $appController->printAnswer($answerModel, $riskTreeFile); ?>
                </table>
            </div>

            <div class='align-self-center'>
                <?php echo sprintf("<img src='%s' alt='%s' width='500px' height='450px'>", Files::getImageFile($symbol), $symbol); ?>
            </div>
        </div>
    <?php
    }
    ?>
</body>
</html>
