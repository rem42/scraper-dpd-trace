<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clsTrace StructType.
 */
#[\AllowDynamicProperties]
class ClsTrace extends AbstractStructBase
{
    /**
     * The StatusNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $StatusNumber;

    /**
     * The ScanDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ScanDate = null;

    /**
     * The ScanTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ScanTime = null;

    /**
     * The StatusDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $StatusDescription = null;

    /**
     * The CenterName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $CenterName = null;

    /**
     * The CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $CenterNumber = null;

    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $User = null;

    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Remark = null;

    /**
     * The Info
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Info = null;

    /**
     * The RelaisInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?RelaisInfo $RelaisInfo = null;

    /**
     * The GeoX
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $GeoX = null;

    /**
     * The GeoY
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $GeoY = null;

    /**
     * The Photo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfTracePhoto $Photo = null;

    /**
     * The ExceptionNotes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfExceptionNote $ExceptionNotes = null;

    /**
     * The ParsedInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ParsedInfo = null;

    /**
     * The Details
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTraceDetails $Details = null;

    /**
     * Constructor method for clsTrace.
     *
     * @uses ClsTrace::setStatusNumber()
     * @uses ClsTrace::setScanDate()
     * @uses ClsTrace::setScanTime()
     * @uses ClsTrace::setStatusDescription()
     * @uses ClsTrace::setCenterName()
     * @uses ClsTrace::setCenterNumber()
     * @uses ClsTrace::setUser()
     * @uses ClsTrace::setRemark()
     * @uses ClsTrace::setInfo()
     * @uses ClsTrace::setRelaisInfo()
     * @uses ClsTrace::setGeoX()
     * @uses ClsTrace::setGeoY()
     * @uses ClsTrace::setPhoto()
     * @uses ClsTrace::setExceptionNotes()
     * @uses ClsTrace::setParsedInfo()
     * @uses ClsTrace::setDetails()
     */
    public function __construct(int $statusNumber, ?string $scanDate = null, ?string $scanTime = null, ?string $statusDescription = null, ?string $centerName = null, ?string $centerNumber = null, ?string $user = null, ?string $remark = null, ?string $info = null, ?RelaisInfo $relaisInfo = null, ?string $geoX = null, ?string $geoY = null, ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfTracePhoto $photo = null, ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfExceptionNote $exceptionNotes = null, ?string $parsedInfo = null, ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTraceDetails $details = null)
    {
        $this
            ->setStatusNumber($statusNumber)
            ->setScanDate($scanDate)
            ->setScanTime($scanTime)
            ->setStatusDescription($statusDescription)
            ->setCenterName($centerName)
            ->setCenterNumber($centerNumber)
            ->setUser($user)
            ->setRemark($remark)
            ->setInfo($info)
            ->setRelaisInfo($relaisInfo)
            ->setGeoX($geoX)
            ->setGeoY($geoY)
            ->setPhoto($photo)
            ->setExceptionNotes($exceptionNotes)
            ->setParsedInfo($parsedInfo)
            ->setDetails($details)
        ;
    }

    /**
     * Get StatusNumber value.
     */
    public function getStatusNumber(): int
    {
        return $this->StatusNumber;
    }

    /**
     * Set StatusNumber value.
     */
    public function setStatusNumber(int $statusNumber): self
    {
        // validation for constraint: int
        if (!is_null($statusNumber) && !(is_int($statusNumber) || ctype_digit($statusNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statusNumber, true), gettype($statusNumber)), __LINE__);
        }
        $this->StatusNumber = $statusNumber;

        return $this;
    }

    /**
     * Get ScanDate value.
     */
    public function getScanDate(): ?string
    {
        return $this->ScanDate;
    }

    /**
     * Set ScanDate value.
     */
    public function setScanDate(?string $scanDate = null): self
    {
        // validation for constraint: string
        if (!is_null($scanDate) && !is_string($scanDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scanDate, true), gettype($scanDate)), __LINE__);
        }
        $this->ScanDate = $scanDate;

        return $this;
    }

    /**
     * Get ScanTime value.
     */
    public function getScanTime(): ?string
    {
        return $this->ScanTime;
    }

    /**
     * Set ScanTime value.
     */
    public function setScanTime(?string $scanTime = null): self
    {
        // validation for constraint: string
        if (!is_null($scanTime) && !is_string($scanTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scanTime, true), gettype($scanTime)), __LINE__);
        }
        $this->ScanTime = $scanTime;

        return $this;
    }

    /**
     * Get StatusDescription value.
     */
    public function getStatusDescription(): ?string
    {
        return $this->StatusDescription;
    }

    /**
     * Set StatusDescription value.
     */
    public function setStatusDescription(?string $statusDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($statusDescription) && !is_string($statusDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusDescription, true), gettype($statusDescription)), __LINE__);
        }
        $this->StatusDescription = $statusDescription;

        return $this;
    }

    /**
     * Get CenterName value.
     */
    public function getCenterName(): ?string
    {
        return $this->CenterName;
    }

    /**
     * Set CenterName value.
     */
    public function setCenterName(?string $centerName = null): self
    {
        // validation for constraint: string
        if (!is_null($centerName) && !is_string($centerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centerName, true), gettype($centerName)), __LINE__);
        }
        $this->CenterName = $centerName;

        return $this;
    }

    /**
     * Get CenterNumber value.
     */
    public function getCenterNumber(): ?string
    {
        return $this->CenterNumber;
    }

    /**
     * Set CenterNumber value.
     */
    public function setCenterNumber(?string $centerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($centerNumber) && !is_string($centerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centerNumber, true), gettype($centerNumber)), __LINE__);
        }
        $this->CenterNumber = $centerNumber;

        return $this;
    }

    /**
     * Get User value.
     */
    public function getUser(): ?string
    {
        return $this->User;
    }

    /**
     * Set User value.
     */
    public function setUser(?string $user = null): self
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        $this->User = $user;

        return $this;
    }

    /**
     * Get Remark value.
     */
    public function getRemark(): ?string
    {
        return $this->Remark;
    }

    /**
     * Set Remark value.
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;

        return $this;
    }

    /**
     * Get Info value.
     */
    public function getInfo(): ?string
    {
        return $this->Info;
    }

    /**
     * Set Info value.
     */
    public function setInfo(?string $info = null): self
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), gettype($info)), __LINE__);
        }
        $this->Info = $info;

        return $this;
    }

    /**
     * Get RelaisInfo value.
     */
    public function getRelaisInfo(): ?RelaisInfo
    {
        return $this->RelaisInfo;
    }

    /**
     * Set RelaisInfo value.
     */
    public function setRelaisInfo(?RelaisInfo $relaisInfo = null): self
    {
        $this->RelaisInfo = $relaisInfo;

        return $this;
    }

    /**
     * Get GeoX value.
     */
    public function getGeoX(): ?string
    {
        return $this->GeoX;
    }

    /**
     * Set GeoX value.
     */
    public function setGeoX(?string $geoX = null): self
    {
        // validation for constraint: string
        if (!is_null($geoX) && !is_string($geoX)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoX, true), gettype($geoX)), __LINE__);
        }
        $this->GeoX = $geoX;

        return $this;
    }

    /**
     * Get GeoY value.
     */
    public function getGeoY(): ?string
    {
        return $this->GeoY;
    }

    /**
     * Set GeoY value.
     */
    public function setGeoY(?string $geoY = null): self
    {
        // validation for constraint: string
        if (!is_null($geoY) && !is_string($geoY)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoY, true), gettype($geoY)), __LINE__);
        }
        $this->GeoY = $geoY;

        return $this;
    }

    /**
     * Get Photo value.
     */
    public function getPhoto(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfTracePhoto
    {
        return $this->Photo;
    }

    /**
     * Set Photo value.
     */
    public function setPhoto(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfTracePhoto $photo = null): self
    {
        $this->Photo = $photo;

        return $this;
    }

    /**
     * Get ExceptionNotes value.
     */
    public function getExceptionNotes(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfExceptionNote
    {
        return $this->ExceptionNotes;
    }

    /**
     * Set ExceptionNotes value.
     */
    public function setExceptionNotes(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfExceptionNote $exceptionNotes = null): self
    {
        $this->ExceptionNotes = $exceptionNotes;

        return $this;
    }

    /**
     * Get ParsedInfo value.
     */
    public function getParsedInfo(): ?string
    {
        return $this->ParsedInfo;
    }

    /**
     * Set ParsedInfo value.
     */
    public function setParsedInfo(?string $parsedInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($parsedInfo) && !is_string($parsedInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parsedInfo, true), gettype($parsedInfo)), __LINE__);
        }
        $this->ParsedInfo = $parsedInfo;

        return $this;
    }

    /**
     * Get Details value.
     */
    public function getDetails(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTraceDetails
    {
        return $this->Details;
    }

    /**
     * Set Details value.
     */
    public function setDetails(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTraceDetails $details = null): self
    {
        $this->Details = $details;

        return $this;
    }
}
