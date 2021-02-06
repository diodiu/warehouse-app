<?php
function my_autoload ($pClassName) {
    $pClassName = str_replace('\\', '/', $pClassName);
    include(__DIR__ . "/../" . $pClassName . ".php");
}
spl_autoload_register("my_autoload");

use Model\AnswerModel;

session_start();


/** @var AnswerModel $answerModel */
$answerModel = $_SESSION['answerModel'];
unset($_SESSION['answerModel']);
print_r($answerModel);
