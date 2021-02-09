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
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * Adds a row.
     *
     * @param CsvRow|CsvRowQuantity $row
     */
    public function addRow($row)
    {
        $this->rows[] = $row;
    }

    /**
     * Headers getter.
     *
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Rows getter.
     *
     * @return CsvRow[]|CsvRowQuantity[]
     */
    public function getRows()
    {
        return $this->rows;
    }
}