<?php

namespace Model;

/**
 * Class CsvRowQuantity
 */
class CsvRowQuantity
{
    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $zone1;

    /**
     * @var int
     */
    private $zone2;

    /**
     * @var int
     */
    private $zone3;

    /**
     * @var int
     */
    private $zone4;

    /**
     * Quantity getter.
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Quantity setter.
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Zone1 getter.
     *
     * @return int|null
     */
    public function getZone1()
    {
        return $this->zone1;
    }

    /**
     * Zone1 setter.
     *
     * @param int|null $zone1
     *
     * @return $this
     */
    public function setZone1($zone1)
    {
        $this->zone1 = $zone1;

        return $this;
    }

    /**
     * Zone2 getter.
     *
     * @return int|null
     */
    public function getZone2()
    {
        return $this->zone2;
    }

    /**
     * Zone2 setter.
     *
     * @param int|null $zone2
     *
     * @return $this
     */
    public function setZone2($zone2)
    {
        $this->zone2 = $zone2;

        return $this;
    }

    /**
     * Zone3 getter.
     *
     * @return int|null
     */
    public function getZone3()
    {
        return $this->zone3;
    }

    /**
     * Zone3 setter.
     *
     * @param int|null $zone3
     *
     * @return $this
     */
    public function setZone3($zone3)
    {
        $this->zone3 = $zone3;

        return $this;
    }

    /**
     * Zone4 getter.
     *
     * @return int|null
     */
    public function getZone4()
    {
        return $this->zone4;
    }

    /**
     * Zone4 setter.
     *
     * @param int|null $zone4
     *
     * @return $this
     */
    public function setZone4($zone4)
    {
        $this->zone4 = $zone4;

        return $this;
    }
}