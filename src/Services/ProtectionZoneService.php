<?php

namespace Services;

use Model\CsvRowQuantity;

/**
 * Class ProtectionZoneService
 */
class ProtectionZoneService
{
    /**
     * @param int $quantity
     *
     * @return string
     */
    public function printZones(int $quantity): string
    {
        $row = $this->getZones($quantity);

        return sprintf(
            '
                    <tr>
                        <th scope="row">1</th>
                        <td>%d</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>%d</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>%d</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>%d</td>
                    </tr>
            ',
            $row->getZone1(),
            $row->getZone2(),
            $row->getZone3(),
            $row->getZone4(),
        );
    }

    /**
     * @param int $quantity
     *
     * @return CsvRowQuantity
     */
    private function getZones(int $quantity): CsvRowQuantity
    {
        $csvReader = new CsvReader();
        $file = $csvReader->readQuantity();
        for ($i = 0; $i < count($file->getRows()); $i++) {
            $j = $i + 1;
            if ($quantity >= $file->getRows()[$i]->getQuantity()) {
                if (isset($file->getRows()[$j])) {
                    if ($quantity < $file->getRows()[$j]->getQuantity()) {
                        return $file->getRows()[$i];
                    }
                } else {
                    return $file->getRows()[$i];
                }
            }
        }
    }
}