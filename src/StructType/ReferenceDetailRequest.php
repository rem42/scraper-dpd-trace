<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

/**
 * This class stands for ReferenceDetailRequest StructType.
 */
#[\AllowDynamicProperties]
class ReferenceDetailRequest extends ReferenceBaseRequest
{
    /**
     * The Searchmode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected string $Searchmode;

    /**
     * The GetImages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected bool $GetImages;

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
     * The GetLastTrace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true.
     */
    protected ?bool $GetLastTrace = null;

    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?Options $Options = null;

    /**
     * Constructor method for ReferenceDetailRequest.
     *
     * @uses ReferenceDetailRequest::setSearchmode()
     * @uses ReferenceDetailRequest::setGetImages()
     * @uses ReferenceDetailRequest::setGetPhotos()
     * @uses ReferenceDetailRequest::setGetParsedInfo()
     * @uses ReferenceDetailRequest::setGetServices()
     * @uses ReferenceDetailRequest::setGetLastTrace()
     * @uses ReferenceDetailRequest::setOptions()
     */
    public function __construct(string $searchmode, bool $getImages, ?bool $getPhotos = null, ?bool $getParsedInfo = null, ?bool $getServices = null, ?bool $getLastTrace = null, ?Options $options = null)
    {
        $this
            ->setSearchmode($searchmode)
            ->setGetImages($getImages)
            ->setGetPhotos($getPhotos)
            ->setGetParsedInfo($getParsedInfo)
            ->setGetServices($getServices)
            ->setGetLastTrace($getLastTrace)
            ->setOptions($options)
        ;
    }

    /**
     * Get Searchmode value.
     */
    public function getSearchmode(): string
    {
        return $this->Searchmode;
    }

    /**
     * Set Searchmode value.
     *
     * @uses \Scraper\ScraperDPDTrace\EnumType\ReferenceSearchMode::valueIsValid()
     * @uses \Scraper\ScraperDPDTrace\EnumType\ReferenceSearchMode::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setSearchmode(string $searchmode): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPDTrace\EnumType\ReferenceSearchMode::valueIsValid($searchmode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPDTrace\EnumType\ReferenceSearchMode', is_array($searchmode) ? implode(', ', $searchmode) : var_export($searchmode, true), implode(', ', \Scraper\ScraperDPDTrace\EnumType\ReferenceSearchMode::getValidValues())), __LINE__);
        }
        $this->Searchmode = $searchmode;

        return $this;
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
     * Get GetLastTrace value.
     */
    public function getGetLastTrace(): ?bool
    {
        return $this->GetLastTrace;
    }

    /**
     * Set GetLastTrace value.
     */
    public function setGetLastTrace(?bool $getLastTrace = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getLastTrace) && !is_bool($getLastTrace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getLastTrace, true), gettype($getLastTrace)), __LINE__);
        }
        $this->GetLastTrace = $getLastTrace;

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
