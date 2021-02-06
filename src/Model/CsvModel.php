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
     * @var CsvRow[]
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
     * @param array $row
     */
    public function addRow(array $row)
    {
        $this->rows[] = (new CsvRow())
            ->setSymbol($row[0])
            ->setDescription($row[1]);
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
     * @return CsvRow[]
     */
    public function getRows(): array
    {
        return $this->rows;
    }
}