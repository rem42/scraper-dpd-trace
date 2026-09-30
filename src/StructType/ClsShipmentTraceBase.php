<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for clsShipmentTraceBase StructType.
 */
#[\AllowDynamicProperties]
class ClsShipmentTraceBase extends AbstractStructBase
{
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected float $Weight;

    /**
     * The IsB2C
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected bool $IsB2C;

    /**
     * The IsRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected bool $IsRetour;

    /**
     * The CustomerCenternumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $CustomerCenternumber;

    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $CustomerNumber;

    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $BarcodeSource;

    /**
     * The ReceiverDepotNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1.
     */
    protected int $ReceiverDepotNumber;

    /**
     * The ReceiverTourNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true.
     */
    protected ?int $ReceiverTourNumber = null;

    /**
     * The DeliveryRecordNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true.
     */
    protected ?int $DeliveryRecordNumber = null;

    /**
     * The DeliveryRecordPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true.
     */
    protected ?int $DeliveryRecordPosition = null;

    /**
     * The ShipmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ShipmentNumber = null;

    /**
     * The DestinationCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $DestinationCountry = null;

    /**
     * The DestinationZipcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $DestinationZipcode = null;

    /**
     * The ShippingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ShippingDate = null;

    /**
     * The DeliveryDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $DeliveryDate = null;

    /**
     * The Receiver
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Receiver = null;

    /**
     * The Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Reference = null;

    /**
     * The Reference2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Reference2 = null;

    /**
     * The Reference3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Reference3 = null;

    /**
     * The Reference4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Reference4 = null;

    /**
     * The DeliveryScheduled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?SdgiData $DeliveryScheduled = null;

    /**
     * The Traces
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTrace $Traces = null;

    /**
     * The Reference_International
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $Reference_International = null;

    /**
     * The PointRelaisName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $PointRelaisName = null;

    /**
     * The PointRelaisLink
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $PointRelaisLink = null;

    /**
     * The ShipmentNumber_Retour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $ShipmentNumber_Retour = null;

    /**
     * The RetourType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $RetourType = null;

    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfServiceInfo $Services = null;

    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0.
     */
    protected ?string $BarcodeId = null;

    /**
     * Constructor method for clsShipmentTraceBase.
     *
     * @uses ClsShipmentTraceBase::setWeight()
     * @uses ClsShipmentTraceBase::setIsB2C()
     * @uses ClsShipmentTraceBase::setIsRetour()
     * @uses ClsShipmentTraceBase::setCustomerCenternumber()
     * @uses ClsShipmentTraceBase::setCustomerNumber()
     * @uses ClsShipmentTraceBase::setBarcodeSource()
     * @uses ClsShipmentTraceBase::setReceiverDepotNumber()
     * @uses ClsShipmentTraceBase::setReceiverTourNumber()
     * @uses ClsShipmentTraceBase::setDeliveryRecordNumber()
     * @uses ClsShipmentTraceBase::setDeliveryRecordPosition()
     * @uses ClsShipmentTraceBase::setShipmentNumber()
     * @uses ClsShipmentTraceBase::setDestinationCountry()
     * @uses ClsShipmentTraceBase::setDestinationZipcode()
     * @uses ClsShipmentTraceBase::setShippingDate()
     * @uses ClsShipmentTraceBase::setDeliveryDate()
     * @uses ClsShipmentTraceBase::setReceiver()
     * @uses ClsShipmentTraceBase::setReference()
     * @uses ClsShipmentTraceBase::setReference2()
     * @uses ClsShipmentTraceBase::setReference3()
     * @uses ClsShipmentTraceBase::setReference4()
     * @uses ClsShipmentTraceBase::setDeliveryScheduled()
     * @uses ClsShipmentTraceBase::setTraces()
     * @uses ClsShipmentTraceBase::setReference_International()
     * @uses ClsShipmentTraceBase::setPointRelaisName()
     * @uses ClsShipmentTraceBase::setPointRelaisLink()
     * @uses ClsShipmentTraceBase::setShipmentNumber_Retour()
     * @uses ClsShipmentTraceBase::setRetourType()
     * @uses ClsShipmentTraceBase::setServices()
     * @uses ClsShipmentTraceBase::setBarcodeId()
     */
    public function __construct(float $weight, bool $isB2C, bool $isRetour, int $customerCenternumber, int $customerNumber, int $barcodeSource, int $receiverDepotNumber, ?int $receiverTourNumber = null, ?int $deliveryRecordNumber = null, ?int $deliveryRecordPosition = null, ?string $shipmentNumber = null, ?string $destinationCountry = null, ?string $destinationZipcode = null, ?string $shippingDate = null, ?string $deliveryDate = null, ?string $receiver = null, ?string $reference = null, ?string $reference2 = null, ?string $reference3 = null, ?string $reference4 = null, ?SdgiData $deliveryScheduled = null, ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTrace $traces = null, ?string $reference_International = null, ?string $pointRelaisName = null, ?string $pointRelaisLink = null, ?string $shipmentNumber_Retour = null, ?string $retourType = null, ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfServiceInfo $services = null, ?string $barcodeId = null)
    {
        $this
            ->setWeight($weight)
            ->setIsB2C($isB2C)
            ->setIsRetour($isRetour)
            ->setCustomerCenternumber($customerCenternumber)
            ->setCustomerNumber($customerNumber)
            ->setBarcodeSource($barcodeSource)
            ->setReceiverDepotNumber($receiverDepotNumber)
            ->setReceiverTourNumber($receiverTourNumber)
            ->setDeliveryRecordNumber($deliveryRecordNumber)
            ->setDeliveryRecordPosition($deliveryRecordPosition)
            ->setShipmentNumber($shipmentNumber)
            ->setDestinationCountry($destinationCountry)
            ->setDestinationZipcode($destinationZipcode)
            ->setShippingDate($shippingDate)
            ->setDeliveryDate($deliveryDate)
            ->setReceiver($receiver)
            ->setReference($reference)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
            ->setDeliveryScheduled($deliveryScheduled)
            ->setTraces($traces)
            ->setReference_International($reference_International)
            ->setPointRelaisName($pointRelaisName)
            ->setPointRelaisLink($pointRelaisLink)
            ->setShipmentNumber_Retour($shipmentNumber_Retour)
            ->setRetourType($retourType)
            ->setServices($services)
            ->setBarcodeId($barcodeId)
        ;
    }

    /**
     * Get Weight value.
     */
    public function getWeight(): float
    {
        return $this->Weight;
    }

    /**
     * Set Weight value.
     */
    public function setWeight(float $weight): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;

        return $this;
    }

    /**
     * Get IsB2C value.
     */
    public function getIsB2C(): bool
    {
        return $this->IsB2C;
    }

    /**
     * Set IsB2C value.
     */
    public function setIsB2C(bool $isB2C): self
    {
        // validation for constraint: boolean
        if (!is_null($isB2C) && !is_bool($isB2C)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isB2C, true), gettype($isB2C)), __LINE__);
        }
        $this->IsB2C = $isB2C;

        return $this;
    }

    /**
     * Get IsRetour value.
     */
    public function getIsRetour(): bool
    {
        return $this->IsRetour;
    }

    /**
     * Set IsRetour value.
     */
    public function setIsRetour(bool $isRetour): self
    {
        // validation for constraint: boolean
        if (!is_null($isRetour) && !is_bool($isRetour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRetour, true), gettype($isRetour)), __LINE__);
        }
        $this->IsRetour = $isRetour;

        return $this;
    }

    /**
     * Get CustomerCenternumber value.
     */
    public function getCustomerCenternumber(): int
    {
        return $this->CustomerCenternumber;
    }

    /**
     * Set CustomerCenternumber value.
     */
    public function setCustomerCenternumber(int $customerCenternumber): self
    {
        // validation for constraint: int
        if (!is_null($customerCenternumber) && !(is_int($customerCenternumber) || ctype_digit($customerCenternumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerCenternumber, true), gettype($customerCenternumber)), __LINE__);
        }
        $this->CustomerCenternumber = $customerCenternumber;

        return $this;
    }

    /**
     * Get CustomerNumber value.
     */
    public function getCustomerNumber(): int
    {
        return $this->CustomerNumber;
    }

    /**
     * Set CustomerNumber value.
     */
    public function setCustomerNumber(int $customerNumber): self
    {
        // validation for constraint: int
        if (!is_null($customerNumber) && !(is_int($customerNumber) || ctype_digit($customerNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerNumber, true), gettype($customerNumber)), __LINE__);
        }
        $this->CustomerNumber = $customerNumber;

        return $this;
    }

    /**
     * Get BarcodeSource value.
     */
    public function getBarcodeSource(): int
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value.
     */
    public function setBarcodeSource(int $barcodeSource): self
    {
        // validation for constraint: int
        if (!is_null($barcodeSource) && !(is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;

        return $this;
    }

    /**
     * Get ReceiverDepotNumber value.
     */
    public function getReceiverDepotNumber(): int
    {
        return $this->ReceiverDepotNumber;
    }

    /**
     * Set ReceiverDepotNumber value.
     */
    public function setReceiverDepotNumber(int $receiverDepotNumber): self
    {
        // validation for constraint: int
        if (!is_null($receiverDepotNumber) && !(is_int($receiverDepotNumber) || ctype_digit($receiverDepotNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiverDepotNumber, true), gettype($receiverDepotNumber)), __LINE__);
        }
        $this->ReceiverDepotNumber = $receiverDepotNumber;

        return $this;
    }

    /**
     * Get ReceiverTourNumber value.
     */
    public function getReceiverTourNumber(): ?int
    {
        return $this->ReceiverTourNumber;
    }

    /**
     * Set ReceiverTourNumber value.
     */
    public function setReceiverTourNumber(?int $receiverTourNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($receiverTourNumber) && !(is_int($receiverTourNumber) || ctype_digit($receiverTourNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiverTourNumber, true), gettype($receiverTourNumber)), __LINE__);
        }
        $this->ReceiverTourNumber = $receiverTourNumber;

        return $this;
    }

    /**
     * Get DeliveryRecordNumber value.
     */
    public function getDeliveryRecordNumber(): ?int
    {
        return $this->DeliveryRecordNumber;
    }

    /**
     * Set DeliveryRecordNumber value.
     */
    public function setDeliveryRecordNumber(?int $deliveryRecordNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($deliveryRecordNumber) && !(is_int($deliveryRecordNumber) || ctype_digit($deliveryRecordNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveryRecordNumber, true), gettype($deliveryRecordNumber)), __LINE__);
        }
        $this->DeliveryRecordNumber = $deliveryRecordNumber;

        return $this;
    }

    /**
     * Get DeliveryRecordPosition value.
     */
    public function getDeliveryRecordPosition(): ?int
    {
        return $this->DeliveryRecordPosition;
    }

    /**
     * Set DeliveryRecordPosition value.
     */
    public function setDeliveryRecordPosition(?int $deliveryRecordPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($deliveryRecordPosition) && !(is_int($deliveryRecordPosition) || ctype_digit($deliveryRecordPosition))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveryRecordPosition, true), gettype($deliveryRecordPosition)), __LINE__);
        }
        $this->DeliveryRecordPosition = $deliveryRecordPosition;

        return $this;
    }

    /**
     * Get ShipmentNumber value.
     */
    public function getShipmentNumber(): ?string
    {
        return $this->ShipmentNumber;
    }

    /**
     * Set ShipmentNumber value.
     */
    public function setShipmentNumber(?string $shipmentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber) && !is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber, true), gettype($shipmentNumber)), __LINE__);
        }
        $this->ShipmentNumber = $shipmentNumber;

        return $this;
    }

    /**
     * Get DestinationCountry value.
     */
    public function getDestinationCountry(): ?string
    {
        return $this->DestinationCountry;
    }

    /**
     * Set DestinationCountry value.
     */
    public function setDestinationCountry(?string $destinationCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCountry) && !is_string($destinationCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCountry, true), gettype($destinationCountry)), __LINE__);
        }
        $this->DestinationCountry = $destinationCountry;

        return $this;
    }

    /**
     * Get DestinationZipcode value.
     */
    public function getDestinationZipcode(): ?string
    {
        return $this->DestinationZipcode;
    }

    /**
     * Set DestinationZipcode value.
     */
    public function setDestinationZipcode(?string $destinationZipcode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationZipcode) && !is_string($destinationZipcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationZipcode, true), gettype($destinationZipcode)), __LINE__);
        }
        $this->DestinationZipcode = $destinationZipcode;

        return $this;
    }

    /**
     * Get ShippingDate value.
     */
    public function getShippingDate(): ?string
    {
        return $this->ShippingDate;
    }

    /**
     * Set ShippingDate value.
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->ShippingDate = $shippingDate;

        return $this;
    }

    /**
     * Get DeliveryDate value.
     */
    public function getDeliveryDate(): ?string
    {
        return $this->DeliveryDate;
    }

    /**
     * Set DeliveryDate value.
     */
    public function setDeliveryDate(?string $deliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get Receiver value.
     */
    public function getReceiver(): ?string
    {
        return $this->Receiver;
    }

    /**
     * Set Receiver value.
     */
    public function setReceiver(?string $receiver = null): self
    {
        // validation for constraint: string
        if (!is_null($receiver) && !is_string($receiver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver, true), gettype($receiver)), __LINE__);
        }
        $this->Receiver = $receiver;

        return $this;
    }

    /**
     * Get Reference value.
     */
    public function getReference(): ?string
    {
        return $this->Reference;
    }

    /**
     * Set Reference value.
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->Reference = $reference;

        return $this;
    }

    /**
     * Get Reference2 value.
     */
    public function getReference2(): ?string
    {
        return $this->Reference2;
    }

    /**
     * Set Reference2 value.
     */
    public function setReference2(?string $reference2 = null): self
    {
        // validation for constraint: string
        if (!is_null($reference2) && !is_string($reference2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference2, true), gettype($reference2)), __LINE__);
        }
        $this->Reference2 = $reference2;

        return $this;
    }

    /**
     * Get Reference3 value.
     */
    public function getReference3(): ?string
    {
        return $this->Reference3;
    }

    /**
     * Set Reference3 value.
     */
    public function setReference3(?string $reference3 = null): self
    {
        // validation for constraint: string
        if (!is_null($reference3) && !is_string($reference3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference3, true), gettype($reference3)), __LINE__);
        }
        $this->Reference3 = $reference3;

        return $this;
    }

    /**
     * Get Reference4 value.
     */
    public function getReference4(): ?string
    {
        return $this->Reference4;
    }

    /**
     * Set Reference4 value.
     */
    public function setReference4(?string $reference4 = null): self
    {
        // validation for constraint: string
        if (!is_null($reference4) && !is_string($reference4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference4, true), gettype($reference4)), __LINE__);
        }
        $this->Reference4 = $reference4;

        return $this;
    }

    /**
     * Get DeliveryScheduled value.
     */
    public function getDeliveryScheduled(): ?SdgiData
    {
        return $this->DeliveryScheduled;
    }

    /**
     * Set DeliveryScheduled value.
     */
    public function setDeliveryScheduled(?SdgiData $deliveryScheduled = null): self
    {
        $this->DeliveryScheduled = $deliveryScheduled;

        return $this;
    }

    /**
     * Get Traces value.
     */
    public function getTraces(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTrace
    {
        return $this->Traces;
    }

    /**
     * Set Traces value.
     */
    public function setTraces(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTrace $traces = null): self
    {
        $this->Traces = $traces;

        return $this;
    }

    /**
     * Get Reference_International value.
     */
    public function getReference_International(): ?string
    {
        return $this->Reference_International;
    }

    /**
     * Set Reference_International value.
     */
    public function setReference_International(?string $reference_International = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_International) && !is_string($reference_International)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_International, true), gettype($reference_International)), __LINE__);
        }
        $this->Reference_International = $reference_International;

        return $this;
    }

    /**
     * Get PointRelaisName value.
     */
    public function getPointRelaisName(): ?string
    {
        return $this->PointRelaisName;
    }

    /**
     * Set PointRelaisName value.
     */
    public function setPointRelaisName(?string $pointRelaisName = null): self
    {
        // validation for constraint: string
        if (!is_null($pointRelaisName) && !is_string($pointRelaisName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pointRelaisName, true), gettype($pointRelaisName)), __LINE__);
        }
        $this->PointRelaisName = $pointRelaisName;

        return $this;
    }

    /**
     * Get PointRelaisLink value.
     */
    public function getPointRelaisLink(): ?string
    {
        return $this->PointRelaisLink;
    }

    /**
     * Set PointRelaisLink value.
     */
    public function setPointRelaisLink(?string $pointRelaisLink = null): self
    {
        // validation for constraint: string
        if (!is_null($pointRelaisLink) && !is_string($pointRelaisLink)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pointRelaisLink, true), gettype($pointRelaisLink)), __LINE__);
        }
        $this->PointRelaisLink = $pointRelaisLink;

        return $this;
    }

    /**
     * Get ShipmentNumber_Retour value.
     */
    public function getShipmentNumber_Retour(): ?string
    {
        return $this->ShipmentNumber_Retour;
    }

    /**
     * Set ShipmentNumber_Retour value.
     */
    public function setShipmentNumber_Retour(?string $shipmentNumber_Retour = null): self
    {
        // validation for constraint: string
        if (!is_null($shipmentNumber_Retour) && !is_string($shipmentNumber_Retour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber_Retour, true), gettype($shipmentNumber_Retour)), __LINE__);
        }
        $this->ShipmentNumber_Retour = $shipmentNumber_Retour;

        return $this;
    }

    /**
     * Get RetourType value.
     */
    public function getRetourType(): ?string
    {
        return $this->RetourType;
    }

    /**
     * Set RetourType value.
     */
    public function setRetourType(?string $retourType = null): self
    {
        // validation for constraint: string
        if (!is_null($retourType) && !is_string($retourType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retourType, true), gettype($retourType)), __LINE__);
        }
        $this->RetourType = $retourType;

        return $this;
    }

    /**
     * Get Services value.
     */
    public function getServices(): ?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfServiceInfo
    {
        return $this->Services;
    }

    /**
     * Set Services value.
     */
    public function setServices(?\Scraper\ScraperDPDTrace\ArrayType\ArrayOfServiceInfo $services = null): self
    {
        $this->Services = $services;

        return $this;
    }

    /**
     * Get BarcodeId value.
     */
    public function getBarcodeId(): ?string
    {
        return $this->BarcodeId;
    }

    /**
     * Set BarcodeId value.
     */
    public function setBarcodeId(?string $barcodeId = null): self
    {
        // validation for constraint: string
        if (!is_null($barcodeId) && !is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), gettype($barcodeId)), __LINE__);
        }
        $this->BarcodeId = $barcodeId;

        return $this;
    }
}
