<?php

namespace Controller;

use files\Files;
use Model\AccidentSequenceModel;
use Model\AnswerModel;
use Model\CsvModel;
use Services\AccidentResultService;
use Services\CsvReader;

/**
 * Class AppController
 */
class AppController
{
    /**
     * @return AccidentSequenceModel
     */
    public function accidentSequences(): AccidentSequenceModel
    {
        $riskFile = $this->getRisks();
        $measureFile = $this->getMeasures();
        $techniqueFile = $this->getTechniques();

        return new AccidentSequenceModel($riskFile, $measureFile, $techniqueFile);
    }

    /**
     * @param AnswerModel $answerModel
     * @param CsvModel    $file
     *
     * @return string
     */
    public function printAnswer(AnswerModel $answerModel, CsvModel $file): string
    {
        $service = new AccidentResultService($answerModel);

        return $service->printResults($file);
    }

    /**
     * @param AnswerModel $answerModel
     *
     * @return CsvModel[]
     */
    public function getRiskFiles(AnswerModel $answerModel): array
    {
        $service = new AccidentResultService($answerModel);

        return $service->getRiskFiles();
    }

    /**
     * Returns the Risk file content.
     *
     * @return CsvModel
     */
    private function getRisks(): CsvModel
    {
        $csvReader = new CsvReader();

        return $csvReader->read(Files::RISK);
    }

    /**
     * Returns the measures file content.
     *
     * @return CsvModel
     */
    private function getMeasures(): CsvModel
    {
        $csvReader = new CsvReader();

        return $csvReader->read(Files::MEASURES);
    }

    /**
     * Returns the techniques file content.
     *
     * @return CsvModel
     */
    private function getTechniques(): CsvModel
    {
        $csvReader = new CsvReader();

        return $csvReader->read(Files::TECHNIQUES);
    }
}