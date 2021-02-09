<?php

namespace Model;

/**
 * Class CsvRow
 */
class CsvRow
{
    /**
     * @var string
     */
    private $symbol;

    /**
     * @var string
     */
    private $description;

    /**
     * Symbol getter.
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * Symbol setter.
     *
     * @param string|null $symbol
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * Description getter.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description setter.
     *
     * @param string|null $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}