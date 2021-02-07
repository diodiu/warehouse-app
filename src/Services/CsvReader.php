<?php

namespace Services;

use Model\CsvModel;
use Model\CsvRow;

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
}