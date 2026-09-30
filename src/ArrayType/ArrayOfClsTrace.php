<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClsTrace ArrayType.
 */
class ArrayOfClsTrace extends AbstractStructArrayBase
{
    /**
     * The clsTrace
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\ClsTrace>|null
     */
    protected ?array $clsTrace = null;

    /**
     * Constructor method for ArrayOfClsTrace.
     *
     * @uses ArrayOfClsTrace::setClsTrace()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ClsTrace> $clsTrace
     */
    public function __construct(?array $clsTrace = null)
    {
        $this
            ->setClsTrace($clsTrace)
        ;
    }

    /**
     * Get clsTrace value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\ClsTrace>|null
     */
    public function getClsTrace(): ?array
    {
        return $this->clsTrace ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setClsTrace method
     * This method is willingly generated in order to preserve the one-line inline validation within the setClsTrace method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateClsTraceForArrayConstraintFromSetClsTrace(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfClsTraceClsTraceItem) {
            // validation for constraint: itemType
            if (!$arrayOfClsTraceClsTraceItem instanceof \Scraper\ScraperDPDTrace\StructType\ClsTrace) {
                $invalidValues[] = is_object($arrayOfClsTraceClsTraceItem) ? get_class($arrayOfClsTraceClsTraceItem) : sprintf('%s(%s)', gettype($arrayOfClsTraceClsTraceItem), var_export($arrayOfClsTraceClsTraceItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The clsTrace property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ClsTrace, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set clsTrace value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ClsTrace> $clsTrace
     *
     * @throws \InvalidArgumentException
     */
    public function setClsTrace(?array $clsTrace = null): self
    {
        // validation for constraint: array
        if ('' !== ($clsTraceArrayErrorMessage = self::validateClsTraceForArrayConstraintFromSetClsTrace($clsTrace))) {
            throw new \InvalidArgumentException($clsTraceArrayErrorMessage, __LINE__);
        }

        if (is_null($clsTrace) || (is_array($clsTrace) && empty($clsTrace))) {
            unset($this->clsTrace);
        } else {
            $this->clsTrace = $clsTrace;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\ClsTrace
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
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\ClsTrace
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\ClsTrace
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\ClsTrace
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
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\ClsTrace
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\ClsTrace $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\ClsTrace) {
            throw new \InvalidArgumentException(sprintf('The clsTrace property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ClsTrace, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string clsTrace
     */
    public function getAttributeName(): string
    {
        return 'clsTrace';
    }
}
