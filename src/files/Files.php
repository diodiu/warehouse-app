<?php

namespace files;

/**
 * Class Files
 */
final class Files
{
    // Answers
    public const RISK = '../Files/factori_risc_declansatori.csv';
    public const MEASURES = '../Files/masuri_organizatorice.csv';
    public const TECHNIQUES = '../Files/tehnici_aplicate.csv';

    // Events tree
    private const D1 = '../Files/EventsTree/D1.csv';
    private const D2 = '../Files/EventsTree/D2.csv';
    private const D3 = '../Files/EventsTree/D3.csv';
    private const D4 = '../Files/EventsTree/D4.csv';
    private const D5 = '../Files/EventsTree/D5.csv';
    private const D6 = '../Files/EventsTree/D6.csv';
    private const D7 = '../Files/EventsTree/D7.csv';
    private const D8 = '../Files/EventsTree/D8.csv';
    private const D9 = '../Files/EventsTree/D9.csv';
    private const D10 = '../Files/EventsTree/D10.csv';
    private const D11 = '../Files/EventsTree/D11.csv';
    private const D12 = '../Files/EventsTree/D12.csv';
    private const D13 = '../Files/EventsTree/D13.csv';
    private const D14 = '../Files/EventsTree/D14.csv';
    private const D15 = '../Files/EventsTree/D15.csv';

    // Events images
    private const D1_IMG= '../Files/Images/D1.png';
    private const D2_IMG= '../Files/Images/D2.png';
    private const D3_IMG= '../Files/Images/D3.png';
    private const D4_IMG= '../Files/Images/D4.png';
    private const D5_IMG= '../Files/Images/D5.png';
    private const D6_IMG= '../Files/Images/D6.png';
    private const D7_IMG= '../Files/Images/D7.png';
    private const D8_IMG= '../Files/Images/D8.png';
    private const D9_IMG= '../Files/Images/D9.png';
    private const D10_IMG = '../Files/Images/D10.png';
    private const D11_IMG = '../Files/Images/D11.png';
    private const D12_IMG = '../Files/Images/D12.png';
    private const D13_IMG = '../Files/Images/D13.png';
    private const D14_IMG = '../Files/Images/D14.png';
    private const D15_IMG = '../Files/Images/D15.png';

    /**
     * @var array|string[]
     */
    public static array $eventsFile = [
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
    public static array $eventsImages = [
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
    public static function getTreeFile(string $risk): string
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
    public static function getImageFile(string $risk): string
    {
        return  self::$eventsImages[$risk];
    }
}