<?php

namespace Controller;

use files\Files;
use Model\AccidentSequenceModel;
use Model\CsvModel;
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
     * @param array $risks
     *
     * @return CsvModel[]
     */
    public function getEventsTree(array $risks): array
    {
        $csvReader = new CsvReader();
        $tree = [];
        foreach ($risks as $risk) {
            $tree[] = $csvReader->read(Files::getTreeFile($risk));
        }

        return $tree;
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