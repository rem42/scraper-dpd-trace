<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for ShipmentDetailRequest StructType.
 */
#[\AllowDynamicProperties]
class ShipmentDetailRequest extends ShipmentBaseRequest
{
    /**
     * The GetImages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected bool $GetImages;

    /**
     * The ExpandContainerMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true.
     */
    protected ?string $ExpandContainerMode = null;

    /**
     * The GetPhotos
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true.
     */
    protected ?bool $GetPhotos = null;

    /**
     * The GetParsedInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true.
     */
    protected ?bool $GetParsedInfo = null;

    /**
     * The GetServices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true.
     */
    protected ?bool $GetServices = null;

    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?Options $Options = null;

    /**
     * Constructor method for ShipmentDetailRequest.
     *
     * @uses ShipmentDetailRequest::setGetImages()
     * @uses ShipmentDetailRequest::setExpandContainerMode()
     * @uses ShipmentDetailRequest::setGetPhotos()
     * @uses ShipmentDetailRequest::setGetParsedInfo()
     * @uses ShipmentDetailRequest::setGetServices()
     * @uses ShipmentDetailRequest::setOptions()
     */
    public function __construct(bool $getImages, ?string $expandContainerMode = null, ?bool $getPhotos = null, ?bool $getParsedInfo = null, ?bool $getServices = null, ?Options $options = null)
    {
        $this
            ->setGetImages($getImages)
            ->setExpandContainerMode($expandContainerMode)
            ->setGetPhotos($getPhotos)
            ->setGetParsedInfo($getParsedInfo)
            ->setGetServices($getServices)
            ->setOptions($options)
        ;
    }

    /**
     * Get GetImages value.
     */
    public function getGetImages(): bool
    {
        return $this->GetImages;
    }

    /**
     * Set GetImages value.
     */
    public function setGetImages(bool $getImages): self
    {
        // validation for constraint: boolean
        if (!is_null($getImages) && !is_bool($getImages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getImages, true), gettype($getImages)), __LINE__);
        }
        $this->GetImages = $getImages;

        return $this;
    }

    /**
     * Get ExpandContainerMode value.
     */
    public function getExpandContainerMode(): ?string
    {
        return $this->ExpandContainerMode;
    }

    /**
     * Set ExpandContainerMode value.
     *
     * @uses \Scraper\ScraperDPDTrace\EnumType\ExpandContainerModeType::valueIsValid()
     * @uses \Scraper\ScraperDPDTrace\EnumType\ExpandContainerModeType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setExpandContainerMode(?string $expandContainerMode = null): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPDTrace\EnumType\ExpandContainerModeType::valueIsValid($expandContainerMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPDTrace\EnumType\ExpandContainerModeType', is_array($expandContainerMode) ? implode(', ', $expandContainerMode) : var_export($expandContainerMode, true), implode(', ', \Scraper\ScraperDPDTrace\EnumType\ExpandContainerModeType::getValidValues())), __LINE__);
        }
        $this->ExpandContainerMode = $expandContainerMode;

        return $this;
    }

    /**
     * Get GetPhotos value.
     */
    public function getGetPhotos(): ?bool
    {
        return $this->GetPhotos;
    }

    /**
     * Set GetPhotos value.
     */
    public function setGetPhotos(?bool $getPhotos = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getPhotos) && !is_bool($getPhotos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getPhotos, true), gettype($getPhotos)), __LINE__);
        }
        $this->GetPhotos = $getPhotos;

        return $this;
    }

    /**
     * Get GetParsedInfo value.
     */
    public function getGetParsedInfo(): ?bool
    {
        return $this->GetParsedInfo;
    }

    /**
     * Set GetParsedInfo value.
     */
    public function setGetParsedInfo(?bool $getParsedInfo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getParsedInfo) && !is_bool($getParsedInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getParsedInfo, true), gettype($getParsedInfo)), __LINE__);
        }
        $this->GetParsedInfo = $getParsedInfo;

        return $this;
    }

    /**
     * Get GetServices value.
     */
    public function getGetServices(): ?bool
    {
        return $this->GetServices;
    }

    /**
     * Set GetServices value.
     */
    public function setGetServices(?bool $getServices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getServices) && !is_bool($getServices)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getServices, true), gettype($getServices)), __LINE__);
        }
        $this->GetServices = $getServices;

        return $this;
    }

    /**
     * Get Options value.
     */
    public function getOptions(): ?Options
    {
        return $this->Options;
    }

    /**
     * Set Options value.
     */
    public function setOptions(?Options $options = null): self
    {
        $this->Options = $options;

        return $this;
    }
}
