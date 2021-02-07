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
}