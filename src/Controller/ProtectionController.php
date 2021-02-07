<?php

namespace Controller;

use Model\CsvRowQuantity;
use Services\ProtectionZoneService;

/**
 * Class ProtectionController
 */
class ProtectionController
{
    /**
     * @param int $quantity
     *
     * @return string
     */
    public function printZones(int $quantity): string
    {
        $service = new ProtectionZoneService();

        return $service->printZones($quantity);
    }

    /**
     * @param int $quantity
     *
     * @return CsvRowQuantity
     */
    public function getZoneRow(int $quantity): CsvRowQuantity
    {
        $service = new ProtectionZoneService();

        return $service->getZones($quantity);
    }
}