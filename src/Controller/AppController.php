<?php

namespace Controller;

use Model\AccidentSequenceModel;
use Model\CsvModel;
use Services\CsvReader;

/**
 * Class AppController
 */
class AppController
{
    private const RISK = '../files/factori_risc_declansatori.csv';
    private const MEASURES = '../files/masuri_organizatorice.csv';
    private const TECHNIQUES = '../files/tehnici_aplicate.csv';

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
     * Returns the Risk file content.
     *
     * @return CsvModel
     */
    private function getRisks(): CsvModel
    {
        $csvReader = new CsvReader();

        return $csvReader->read(self::RISK);
    }

    /**
     * Returns the measures file content.
     *
     * @return CsvModel
     */
    private function getMeasures(): CsvModel
    {
        $csvReader = new CsvReader();

        return $csvReader->read(self::MEASURES);
    }

    /**
     * Returns the techniques file content.
     *
     * @return CsvModel
     */
    private function getTechniques(): CsvModel
    {
        $csvReader = new CsvReader();

        return $csvReader->read(self::TECHNIQUES);
    }
}