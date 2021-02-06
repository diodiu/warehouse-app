<?php

namespace Services;

use Model\CsvModel;

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
        $row = 0;
        if ($handle = fopen($filename, self::READ)) {
            while ($data = fgetcsv($handle)) {
                if ($row === 0) {
                    $csvModel->setHeaders($data);
                } else {
                    $csvModel->addRow($data);
                }
                $row++;
            }
            fclose($handle);
        }

        return $csvModel;
    }
}