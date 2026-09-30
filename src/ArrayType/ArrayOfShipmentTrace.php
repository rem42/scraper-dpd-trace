<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipmentTrace ArrayType.
 */
class ArrayOfShipmentTrace extends AbstractStructArrayBase
{
    /**
     * The ShipmentTrace
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\ShipmentTrace>|null
     */
    protected ?array $ShipmentTrace = null;

    /**
     * Constructor method for ArrayOfShipmentTrace.
     *
     * @uses ArrayOfShipmentTrace::setShipmentTrace()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ShipmentTrace> $shipmentTrace
     */
    public function __construct(?array $shipmentTrace = null)
    {
        $this
            ->setShipmentTrace($shipmentTrace)
        ;
    }

    /**
     * Get ShipmentTrace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\ShipmentTrace>|null
     */
    public function getShipmentTrace(): ?array
    {
        return $this->ShipmentTrace ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setShipmentTrace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentTrace method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentTraceForArrayConstraintFromSetShipmentTrace(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfShipmentTraceShipmentTraceItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentTraceShipmentTraceItem instanceof \Scraper\ScraperDPDTrace\StructType\ShipmentTrace) {
                $invalidValues[] = is_object($arrayOfShipmentTraceShipmentTraceItem) ? get_class($arrayOfShipmentTraceShipmentTraceItem) : sprintf('%s(%s)', gettype($arrayOfShipmentTraceShipmentTraceItem), var_export($arrayOfShipmentTraceShipmentTraceItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ShipmentTrace property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ShipmentTrace, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set ShipmentTrace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ShipmentTrace> $shipmentTrace
     *
     * @throws \InvalidArgumentException
     */
    public function setShipmentTrace(?array $shipmentTrace = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipmentTraceArrayErrorMessage = self::validateShipmentTraceForArrayConstraintFromSetShipmentTrace($shipmentTrace))) {
            throw new \InvalidArgumentException($shipmentTraceArrayErrorMessage, __LINE__);
        }

        if (is_null($shipmentTrace) || (is_array($shipmentTrace) && empty($shipmentTrace))) {
            unset($this->ShipmentTrace);
        } else {
            $this->ShipmentTrace = $shipmentTrace;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\ShipmentTrace
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
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\ShipmentTrace
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\ShipmentTrace
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\ShipmentTrace
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
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\ShipmentTrace
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\ShipmentTrace $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\ShipmentTrace) {
            throw new \InvalidArgumentException(sprintf('The ShipmentTrace property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ShipmentTrace, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string ShipmentTrace
     */
    public function getAttributeName(): string
    {
        return 'ShipmentTrace';
    }
}
