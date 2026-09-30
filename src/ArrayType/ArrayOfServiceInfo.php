<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceInfo ArrayType.
 */
class ArrayOfServiceInfo extends AbstractStructArrayBase
{
    /**
     * The ServiceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\ServiceInfo>|null
     */
    protected ?array $ServiceInfo = null;

    /**
     * Constructor method for ArrayOfServiceInfo.
     *
     * @uses ArrayOfServiceInfo::setServiceInfo()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ServiceInfo> $serviceInfo
     */
    public function __construct(?array $serviceInfo = null)
    {
        $this
            ->setServiceInfo($serviceInfo)
        ;
    }

    /**
     * Get ServiceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\ServiceInfo>|null
     */
    public function getServiceInfo(): ?array
    {
        return $this->ServiceInfo ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setServiceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceInfo method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceInfoForArrayConstraintFromSetServiceInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfServiceInfoServiceInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceInfoServiceInfoItem instanceof \Scraper\ScraperDPDTrace\StructType\ServiceInfo) {
                $invalidValues[] = is_object($arrayOfServiceInfoServiceInfoItem) ? get_class($arrayOfServiceInfoServiceInfoItem) : sprintf('%s(%s)', gettype($arrayOfServiceInfoServiceInfoItem), var_export($arrayOfServiceInfoServiceInfoItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceInfo property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ServiceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set ServiceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ServiceInfo> $serviceInfo
     *
     * @throws \InvalidArgumentException
     */
    public function setServiceInfo(?array $serviceInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceInfoArrayErrorMessage = self::validateServiceInfoForArrayConstraintFromSetServiceInfo($serviceInfo))) {
            throw new \InvalidArgumentException($serviceInfoArrayErrorMessage, __LINE__);
        }

        if (is_null($serviceInfo) || (is_array($serviceInfo) && empty($serviceInfo))) {
            unset($this->ServiceInfo);
        } else {
            $this->ServiceInfo = $serviceInfo;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\ServiceInfo
    {
        return parent::current();
    }

    /**
     * Returns the indexed element.
     *
     * @see AbstractStructArrayBase::item()
     *
     * @param int $index
     */
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\ServiceInfo
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\ServiceInfo
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\ServiceInfo
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset.
     *
     * @see AbstractStructArrayBase::offsetGet()
     *
     * @param int $offset
     */
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\ServiceInfo
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\ServiceInfo $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\ServiceInfo) {
            throw new \InvalidArgumentException(sprintf('The ServiceInfo property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ServiceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string ServiceInfo
     */
    public function getAttributeName(): string
    {
        return 'ServiceInfo';
    }
}
