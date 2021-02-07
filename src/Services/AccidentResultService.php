<?php

namespace Services;

use files\Files;
use Model\AnswerModel;
use Model\CsvModel;

/**
 * Class AccidentResultService
 */
class AccidentResultService
{
    /**
     * @var AnswerModel
     */
    private $answerModel;

    /**
     * @var CsvModel[]
     */
    private $riskTreeFiles;

    /**
     * @var CsvReader
     */
    private $csvReader;

    /**
     * AccidentResultService constructor.
     *
     * @param AnswerModel $answerModel
     */
    public function __construct(AnswerModel $answerModel)
    {
        $this->answerModel = $answerModel;
        $this->csvReader = new CsvReader();
    }

    /**
     * @param CsvModel $file
     *
     * @return string
     */
    public function printResults(CsvModel $file): string
    {
        $table = '';
        foreach ($file->getRows() as $row) {
            $rowAsArray = str_replace(['e', 'r', '*'], '', explode('*', $row->getDescription()));
            $intersect = array_filter(
                array_diff(
                    $rowAsArray,
                    $this->answerModel->getMeasuresSymbols(),
                    $this->answerModel->getTechniquesSymbols()
                )
            );

            $class = 'danger';
            if (!$intersect) {
                $class = 'success';
            }

            $table .= sprintf(
                '
                    <tr class="table-%s">
                        <td>%s%s</td>
                    </tr>
                ',
                $class,
                $row->getSymbol(),
                $row->getDescription()
            );
        }

        return $table;
    }

    /**
     * @return CsvModel[]
     */
    public function getRiskFiles(): array
    {
        if (!isset($this->riskTreeFiles)) {
            foreach ($this->answerModel->getRisksSymbols() as $risk) {
                $this->riskTreeFiles[] = $this->csvReader->read(Files::getTreeFile($risk));
            }
        }

        return $this->riskTreeFiles;
    }
}