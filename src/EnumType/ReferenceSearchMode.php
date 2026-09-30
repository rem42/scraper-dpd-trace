<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReferenceSearchMode EnumType.
 */
class ReferenceSearchMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Equals'.
     *
     * @return string 'Equals'
     */
    public const VALUE_EQUALS = 'Equals';

    /**
     * Constant for value 'Like'.
     *
     * @return string 'Like'
     */
    public const VALUE_LIKE = 'Like';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_EQUALS
     * @uses self::VALUE_LIKE
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EQUALS,
            self::VALUE_LIKE,
        ];
    }
}
