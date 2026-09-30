<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetLastTraceBcResponse ArrayType.
 */
class ArrayOfGetLastTraceBcResponse extends AbstractStructArrayBase
{
    /**
     * The GetLastTraceBcResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse>|null
     */
    protected ?array $GetLastTraceBcResponse = null;

    /**
     * Constructor method for ArrayOfGetLastTraceBcResponse.
     *
     * @uses ArrayOfGetLastTraceBcResponse::setGetLastTraceBcResponse()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse> $getLastTraceBcResponse
     */
    public function __construct(?array $getLastTraceBcResponse = null)
    {
        $this
            ->setGetLastTraceBcResponse($getLastTraceBcResponse)
        ;
    }

    /**
     * Get GetLastTraceBcResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse>|null
     */
    public function getGetLastTraceBcResponse(): ?array
    {
        return $this->GetLastTraceBcResponse ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setGetLastTraceBcResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetLastTraceBcResponse method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetLastTraceBcResponseForArrayConstraintFromSetGetLastTraceBcResponse(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem instanceof \Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse) {
                $invalidValues[] = is_object($arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem) ? get_class($arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem) : sprintf('%s(%s)', gettype($arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem), var_export($arrayOfGetLastTraceBcResponseGetLastTraceBcResponseItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The GetLastTraceBcResponse property can only contain items of type \Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set GetLastTraceBcResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse> $getLastTraceBcResponse
     *
     * @throws \InvalidArgumentException
     */
    public function setGetLastTraceBcResponse(?array $getLastTraceBcResponse = null): self
    {
        // validation for constraint: array
        if ('' !== ($getLastTraceBcResponseArrayErrorMessage = self::validateGetLastTraceBcResponseForArrayConstraintFromSetGetLastTraceBcResponse($getLastTraceBcResponse))) {
            throw new \InvalidArgumentException($getLastTraceBcResponseArrayErrorMessage, __LINE__);
        }

        if (is_null($getLastTraceBcResponse) || (is_array($getLastTraceBcResponse) && empty($getLastTraceBcResponse))) {
            unset($this->GetLastTraceBcResponse);
        } else {
            $this->GetLastTraceBcResponse = $getLastTraceBcResponse;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse
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
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse
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
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse) {
            throw new \InvalidArgumentException(sprintf('The GetLastTraceBcResponse property can only contain items of type \Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string GetLastTraceBcResponse
     */
    public function getAttributeName(): string
    {
        return 'GetLastTraceBcResponse';
    }
}
