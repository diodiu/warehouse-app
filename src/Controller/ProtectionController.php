<?php

namespace Controller;

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
}