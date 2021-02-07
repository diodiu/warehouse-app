<?php
function my_autoload ($pClassName) {
    $pClassName = str_replace('\\', '/', $pClassName);
    include(__DIR__ . "/../" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

use Controller\AppController;
use Model\AnswerModel;

session_start();

$appController = new AppController();
/** @var AnswerModel $answerModel */
$answerModel = $_SESSION['answerModel'];
//unset($_SESSION['answerModel']);
$riskTreeFiles = $appController->getEventsTree($answerModel->getRisksSymbols());
$measureAnswerSymbols = $answerModel->getMeasuresSymbols();
$techniqueAnswerSymbols = $answerModel->getTechniquesSymbols();
foreach ($riskTreeFiles as $riskTreeFile) {
    echo sprintf('<h1>%s</h1>', $riskTreeFile->getRows()[0]->getSymbol());
    foreach ($riskTreeFile->getRows() as $row) {
        $rowAsArray = str_replace(['e', 'r', '*'], '', explode('*', $row->getDescription()));
        $intersect = array_filter(array_diff($rowAsArray, $measureAnswerSymbols, $techniqueAnswerSymbols));
        if (!$intersect) {
            $row->setExists(true);
        }
        echo sprintf('<p style="color: %s">%s%s</p>', $row->isExists() ? 'green' : 'red', $row->getSymbol(), $row->getDescription());
    }
}
