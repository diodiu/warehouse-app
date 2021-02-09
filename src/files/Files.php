<?php

namespace files;

/**
 * Class Files
 */
final class Files
{
    // Answers
    const RISK = '../Files/factori_risc_declansatori.csv';
    const MEASURES = '../Files/masuri_organizatorice.csv';
    const TECHNIQUES = '../Files/tehnici_aplicate.csv';
    const QUANTITIES = '../Files/cantitati_explozibil.csv';

    // Events tree
    const D1 = '../Files/EventsTree/D1.csv';
    const D2 = '../Files/EventsTree/D2.csv';
    const D3 = '../Files/EventsTree/D3.csv';
    const D4 = '../Files/EventsTree/D4.csv';
    const D5 = '../Files/EventsTree/D5.csv';
    const D6 = '../Files/EventsTree/D6.csv';
    const D7 = '../Files/EventsTree/D7.csv';
    const D8 = '../Files/EventsTree/D8.csv';
    const D9 = '../Files/EventsTree/D9.csv';
    const D10 = '../Files/EventsTree/D10.csv';
    const D11 = '../Files/EventsTree/D11.csv';
    const D12 = '../Files/EventsTree/D12.csv';
    const D13 = '../Files/EventsTree/D13.csv';
    const D14 = '../Files/EventsTree/D14.csv';
    const D15 = '../Files/EventsTree/D15.csv';

    // Events images
    const D1_IMG= '../Files/Images/D1.png';
    const D2_IMG= '../Files/Images/D2.png';
    const D3_IMG= '../Files/Images/D3.png';
    const D4_IMG= '../Files/Images/D4.png';
    const D5_IMG= '../Files/Images/D5.png';
    const D6_IMG= '../Files/Images/D6.png';
    const D7_IMG= '../Files/Images/D7.png';
    const D8_IMG= '../Files/Images/D8.png';
    const D9_IMG= '../Files/Images/D9.png';
    const D10_IMG = '../Files/Images/D10.png';
    const D11_IMG = '../Files/Images/D11.png';
    const D12_IMG = '../Files/Images/D12.png';
    const D13_IMG = '../Files/Images/D13.png';
    const D14_IMG = '../Files/Images/D14.png';
    const D15_IMG = '../Files/Images/D15.png';

    /**
     * @var array|string[]
     */
    public static $eventsFile = [
        'D1' => self::D1,
        'D2' => self::D2,
        'D3' => self::D3,
        'D4' => self::D4,
        'D5' => self::D5,
        'D6' => self::D6,
        'D7' => self::D7,
        'D8' => self::D8,
        'D9' => self::D9,
        'D10' => self::D10,
        'D11' => self::D11,
        'D12' => self::D12,
        'D13' => self::D13,
        'D14' => self::D14,
        'D15' => self::D15,
    ];

    /**
     * @var array|string[]
     */
    public static $eventsImages = [
        'D1' => self::D1_IMG,
        'D2' => self::D2_IMG,
        'D3' => self::D3_IMG,
        'D4' => self::D4_IMG,
        'D5' => self::D5_IMG,
        'D6' => self::D6_IMG,
        'D7' => self::D7_IMG,
        'D8' => self::D8_IMG,
        'D9' => self::D9_IMG,
        'D10' => self::D10_IMG,
        'D11' => self::D11_IMG,
        'D12' => self::D12_IMG,
        'D13' => self::D13_IMG,
        'D14' => self::D14_IMG,
        'D15' => self::D15_IMG,
    ];

    /**
     * Returns the file name according to the risk.
     *
     * @param string $risk
     *
     * @return string
     */
    public static function getTreeFile($risk)
    {
        return self::$eventsFile[$risk];
    }

    /**
     * Returns the image name according to the risk.
     *
     * @param string $risk
     *
     * @return string
     */
    public static function getImageFile($risk)
    {
        return  self::$eventsImages[$risk];
    }
}