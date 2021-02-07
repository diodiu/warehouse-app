<?php

namespace Model;

/**
 * Class CsvModel
 */
class CsvModel
{
    /**
     * @var array
     */
    private $headers;

    /**
     * @var CsvRow[]|CsvRowQuantity[]
     */
    private $rows;

    /**
     * Sets the headers.
     *
     * @param array|null $headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
    }

    /**
     * Adds a row.
     *
     * @param CsvRow|CsvRowQuantity $row
     */
    public function addRow(object $row)
    {
        $this->rows[] = $row;
    }

    /**
     * Headers getter.
     *
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * Rows getter.
     *
     * @return CsvRow[]|CsvRowQuantity[]
     */
    public function getRows(): array
    {
        return $this->rows;
    }
}