<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelaisInfo StructType.
 */
#[\AllowDynamicProperties]
class RelaisInfo extends AbstractStructBase
{
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ID = null;

    /**
     * The CNSid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $CNSid = null;

    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Name = null;

    /**
     * Constructor method for RelaisInfo.
     *
     * @uses RelaisInfo::setID()
     * @uses RelaisInfo::setCNSid()
     * @uses RelaisInfo::setName()
     */
    public function __construct(?string $iD = null, ?string $cNSid = null, ?string $name = null)
    {
        $this
            ->setID($iD)
            ->setCNSid($cNSid)
            ->setName($name)
        ;
    }

    /**
     * Get ID value.
     */
    public function getID(): ?string
    {
        return $this->ID;
    }

    /**
     * Set ID value.
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;

        return $this;
    }

    /**
     * Get CNSid value.
     */
    public function getCNSid(): ?string
    {
        return $this->CNSid;
    }

    /**
     * Set CNSid value.
     */
    public function setCNSid(?string $cNSid = null): self
    {
        // validation for constraint: string
        if (!is_null($cNSid) && !is_string($cNSid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cNSid, true), gettype($cNSid)), __LINE__);
        }
        $this->CNSid = $cNSid;

        return $this;
    }

    /**
     * Get Name value.
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * Set Name value.
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;

        return $this;
    }
}
