<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ImageType EnumType.
 */
class ImageType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'POD'.
     *
     * @return string 'POD'
     */
    public const VALUE_POD = 'POD';

    /**
     * Constant for value 'POA'.
     *
     * @return string 'POA'
     */
    public const VALUE_POA = 'POA';

    /**
     * Constant for value 'DeliverySignature'.
     *
     * @return string 'DeliverySignature'
     */
    public const VALUE_DELIVERY_SIGNATURE = 'DeliverySignature';

    /**
     * Constant for value 'DeliveryShop'.
     *
     * @return string 'DeliveryShop'
     */
    public const VALUE_DELIVERY_SHOP = 'DeliveryShop';

    /**
     * Constant for value 'PickupSignature'.
     *
     * @return string 'PickupSignature'
     */
    public const VALUE_PICKUP_SIGNATURE = 'PickupSignature';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_POD
     * @uses self::VALUE_POA
     * @uses self::VALUE_DELIVERY_SIGNATURE
     * @uses self::VALUE_DELIVERY_SHOP
     * @uses self::VALUE_PICKUP_SIGNATURE
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POD,
            self::VALUE_POA,
            self::VALUE_DELIVERY_SIGNATURE,
            self::VALUE_DELIVERY_SHOP,
            self::VALUE_PICKUP_SIGNATURE,
        ];
    }
}
