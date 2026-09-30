<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExceptionNote ArrayType.
 */
class ArrayOfExceptionNote extends AbstractStructArrayBase
{
    /**
     * The ExceptionNote
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<\Scraper\ScraperDPDTrace\StructType\ExceptionNote>|null
     */
    protected ?array $ExceptionNote = null;

    /**
     * Constructor method for ArrayOfExceptionNote.
     *
     * @uses ArrayOfExceptionNote::setExceptionNote()
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ExceptionNote> $exceptionNote
     */
    public function __construct(?array $exceptionNote = null)
    {
        $this
            ->setExceptionNote($exceptionNote)
        ;
    }

    /**
     * Get ExceptionNote value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<\Scraper\ScraperDPDTrace\StructType\ExceptionNote>|null
     */
    public function getExceptionNote(): ?array
    {
        return $this->ExceptionNote ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setExceptionNote method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExceptionNote method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExceptionNoteForArrayConstraintFromSetExceptionNote(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfExceptionNoteExceptionNoteItem) {
            // validation for constraint: itemType
            if (!$arrayOfExceptionNoteExceptionNoteItem instanceof \Scraper\ScraperDPDTrace\StructType\ExceptionNote) {
                $invalidValues[] = is_object($arrayOfExceptionNoteExceptionNoteItem) ? get_class($arrayOfExceptionNoteExceptionNoteItem) : sprintf('%s(%s)', gettype($arrayOfExceptionNoteExceptionNoteItem), var_export($arrayOfExceptionNoteExceptionNoteItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ExceptionNote property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ExceptionNote, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set ExceptionNote value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<\Scraper\ScraperDPDTrace\StructType\ExceptionNote> $exceptionNote
     *
     * @throws \InvalidArgumentException
     */
    public function setExceptionNote(?array $exceptionNote = null): self
    {
        // validation for constraint: array
        if ('' !== ($exceptionNoteArrayErrorMessage = self::validateExceptionNoteForArrayConstraintFromSetExceptionNote($exceptionNote))) {
            throw new \InvalidArgumentException($exceptionNoteArrayErrorMessage, __LINE__);
        }

        if (is_null($exceptionNote) || (is_array($exceptionNote) && empty($exceptionNote))) {
            unset($this->ExceptionNote);
        } else {
            $this->ExceptionNote = $exceptionNote;
        }

        return $this;
    }

    /**
     * Returns the current element.
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPDTrace\StructType\ExceptionNote
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
    public function item($index): ?\Scraper\ScraperDPDTrace\StructType\ExceptionNote
    {
        return parent::item($index);
    }

    /**
     * Returns the first element.
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPDTrace\StructType\ExceptionNote
    {
        return parent::first();
    }

    /**
     * Returns the last element.
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPDTrace\StructType\ExceptionNote
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
    public function offsetGet($offset): ?\Scraper\ScraperDPDTrace\StructType\ExceptionNote
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array.
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPDTrace\StructType\ExceptionNote $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPDTrace\StructType\ExceptionNote) {
            throw new \InvalidArgumentException(sprintf('The ExceptionNote property can only contain items of type \Scraper\ScraperDPDTrace\StructType\ExceptionNote, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }

        return parent::add($item);
    }

    /**
     * Returns the attribute name.
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string ExceptionNote
     */
    public function getAttributeName(): string
    {
        return 'ExceptionNote';
    }
}
