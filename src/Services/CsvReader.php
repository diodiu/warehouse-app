<?php

namespace Services;

use files\Files;
use Model\CsvModel;
use Model\CsvRow;
use Model\CsvRowQuantity;

/**
 * Class CsvReader
 */
class CsvReader
{
    private const READ = 'r';

    /**
     * Reads the given csv file.
     *
     * @param string $filename
     *
     * @return CsvModel
     */
    public function read(string $filename): CsvModel
    {
        $csvModel = new CsvModel();
        $rowCount = 0;
        if ($handle = fopen($filename, self::READ)) {
            while ($data = fgetcsv($handle)) {
                if ($rowCount === 0) {
                    $csvModel->setHeaders($data);
                } else {
                    $row = new CsvRow();
                    $row->setSymbol($data[0])
                        ->setDescription($data[1]);
                    $csvModel->addRow($row);
                }
                $rowCount++;
            }
            fclose($handle);
        }

        return $csvModel;
    }

    /**
     * Reads the quantity csv file.
     *
     * @return CsvModel
     */
    public function readQuantity(): CsvModel
    {
        $csvModel = new CsvModel();
        $rowCount = 0;
        if ($handle = fopen(Files::QUANTITIES, self::READ)) {
            while ($data = fgetcsv($handle)) {
                if ($rowCount === 0) {
                    $csvModel->setHeaders($data);
                } else {
                    $row = new CsvRowQuantity();
                    $row->setQuantity($data[0])
                        ->setZone1($data[1])
                        ->setZone2($data[2])
                        ->setZone3($data[3])
                        ->setZone4($data[4]);
                    $csvModel->addRow($row);
                }
                $rowCount++;
            }
            fclose($handle);
        }

        return $csvModel;
    }
}