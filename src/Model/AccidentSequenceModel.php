<?php

namespace Model;

/**
 * Class AccidentSequenceModel
 */
class AccidentSequenceModel
{
    /**
     * @var CsvModel
     */
    private $riskFile;

    /**
     * @var CsvModel
     */
    private $measureFile;

    /**
     * @var CsvModel
     */
    private $techniqueFile;

    /**
     * AccidentSequences constructor.
     *
     * @param CsvModel $riskFile
     * @param CsvModel $measureFile
     * @param CsvModel $techniqueFile
     */
    public function __construct(CsvModel $riskFile, CsvModel $measureFile, CsvModel $techniqueFile)
    {
        $this->riskFile = $riskFile;
        $this->measureFile = $measureFile;
        $this->techniqueFile = $techniqueFile;
    }

    /**
     * @return string
     */
    public function printTechniqueHeaders()
    {
        return $this->printHeaders($this->techniqueFile->getHeaders());
    }

    /**
     * @return string
     */
    public function printTechniqueRows()
    {
        return $this->printRows($this->techniqueFile->getRows());
    }

    /**
     * @return string
     */
    public function printMeasureHeaders()
    {
        return $this->printHeaders($this->measureFile->getHeaders());
    }

    /**
     * @return string
     */
    public function printMeasureRows()
    {
        return $this->printRows($this->measureFile->getRows());
    }

    /**
     * @return string
     */
    public function printRiskHeaders()
    {
        return $this->printHeaders($this->riskFile->getHeaders());
    }

    /**
     * @return string
     */
    public function printRiskRows()
    {
        return $this->printRows($this->riskFile->getRows());
    }

    /**
     * @param array $headers
     *
     * @return string
     */
    private function printHeaders(array $headers)
    {
        $headers = array_merge($headers, ['Da', 'Nu']);
        $html = '';
        foreach ($headers as $header) {
            $html .= sprintf('<th>%s</th>', $header);
        }

        return $html;
    }

    /**
     * @param CsvRow[] $rows
     *
     * @return string
     */
    private function printRows(array $rows)
    {
        $html = '';
        foreach ($rows as $index => $row) {
            $html .= sprintf(
                '
                        <tr>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                            <td>%s</td>
                        </tr>
                    ',
                $row->getSymbol(),
                $row->getDescription(),
                sprintf('<input type="checkbox" name="yes[]" value="%s">', ++$index),
                sprintf('<input type="checkbox" name="no[]" value="%s">', $index)
            );
        }

        return $html;
    }
}