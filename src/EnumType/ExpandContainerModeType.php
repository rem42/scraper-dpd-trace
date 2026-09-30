<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExpandContainerModeType EnumType.
 */
class ExpandContainerModeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MasterOnly'.
     *
     * @return string 'MasterOnly'
     */
    public const VALUE_MASTER_ONLY = 'MasterOnly';

    /**
     * Constant for value 'MasterAndSlave'.
     *
     * @return string 'MasterAndSlave'
     */
    public const VALUE_MASTER_AND_SLAVE = 'MasterAndSlave';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_MASTER_ONLY
     * @uses self::VALUE_MASTER_AND_SLAVE
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MASTER_ONLY,
            self::VALUE_MASTER_AND_SLAVE,
        ];
    }
}
