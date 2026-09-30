<?php

declare(strict_types=1);

namespace Scraper\ScraperDPDTrace;

/**
 * Class which returns the class map definition.
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS.
     *
     * @return array<string>
     */
    final public static function get(): array
    {
        return [
            'isAlive' => '\Scraper\ScraperDPDTrace\StructType\IsAlive',
            'isAliveResponse' => '\Scraper\ScraperDPDTrace\StructType\IsAliveResponse',
            'setAlive' => '\Scraper\ScraperDPDTrace\StructType\SetAlive',
            'setAliveResponse' => '\Scraper\ScraperDPDTrace\StructType\SetAliveResponse',
            'UserCredentials' => '\Scraper\ScraperDPDTrace\StructType\UserCredentials',
            'VerifyConfiguration' => '\Scraper\ScraperDPDTrace\StructType\VerifyConfiguration',
            'VerifyConfigurationRequest' => '\Scraper\ScraperDPDTrace\StructType\VerifyConfigurationRequest',
            'Customer' => '\Scraper\ScraperDPDTrace\StructType\Customer',
            'CustomerSmall' => '\Scraper\ScraperDPDTrace\StructType\CustomerSmall',
            'VerifyConfigurationResponse' => '\Scraper\ScraperDPDTrace\StructType\VerifyConfigurationResponse',
            'VerifyUserCredentials' => '\Scraper\ScraperDPDTrace\StructType\VerifyUserCredentials',
            'getInfo' => '\Scraper\ScraperDPDTrace\StructType\GetInfo',
            'getInfoResponse' => '\Scraper\ScraperDPDTrace\StructType\GetInfoResponse',
            'runAction' => '\Scraper\ScraperDPDTrace\StructType\RunAction',
            'RunActionRequest' => '\Scraper\ScraperDPDTrace\StructType\RunActionRequest',
            'runActionResponse' => '\Scraper\ScraperDPDTrace\StructType\RunActionResponse',
            'RunActionResponse' => '\Scraper\ScraperDPDTrace\StructType\RunActionResponse_1',
            'GetShipmentTraceSingle' => '\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceSingle',
            'ShipmentDetailRequest' => '\Scraper\ScraperDPDTrace\StructType\ShipmentDetailRequest',
            'ShipmentBaseRequest' => '\Scraper\ScraperDPDTrace\StructType\ShipmentBaseRequest',
            'RequestShipmentBase' => '\Scraper\ScraperDPDTrace\StructType\RequestShipmentBase',
            'RequestBase' => '\Scraper\ScraperDPDTrace\StructType\RequestBase',
            'Options' => '\Scraper\ScraperDPDTrace\StructType\Options',
            'GetShipmentTraceSingleResponse' => '\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceSingleResponse',
            'ShipmentTrace' => '\Scraper\ScraperDPDTrace\StructType\ShipmentTrace',
            'clsShipmentTraceBase' => '\Scraper\ScraperDPDTrace\StructType\ClsShipmentTraceBase',
            'SdgiData' => '\Scraper\ScraperDPDTrace\StructType\SdgiData',
            'ArrayOfClsTrace' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTrace',
            'clsTrace' => '\Scraper\ScraperDPDTrace\StructType\ClsTrace',
            'RelaisInfo' => '\Scraper\ScraperDPDTrace\StructType\RelaisInfo',
            'ArrayOfTracePhoto' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfTracePhoto',
            'TracePhoto' => '\Scraper\ScraperDPDTrace\StructType\TracePhoto',
            'ArrayOfExceptionNote' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfExceptionNote',
            'ExceptionNote' => '\Scraper\ScraperDPDTrace\StructType\ExceptionNote',
            'ArrayOfClsTraceDetails' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfClsTraceDetails',
            'clsTraceDetails' => '\Scraper\ScraperDPDTrace\StructType\ClsTraceDetails',
            'ArrayOfServiceInfo' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfServiceInfo',
            'ServiceInfo' => '\Scraper\ScraperDPDTrace\StructType\ServiceInfo',
            'ArrayOfImage' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfImage',
            'Image' => '\Scraper\ScraperDPDTrace\StructType\Image',
            'GetShipmentTrace' => '\Scraper\ScraperDPDTrace\StructType\GetShipmentTrace',
            'GetShipmentTraceResponse' => '\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceResponse',
            'ArrayOfShipmentTrace' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfShipmentTrace',
            'GetShipmentTraceByReference' => '\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceByReference',
            'ReferenceDetailRequest' => '\Scraper\ScraperDPDTrace\StructType\ReferenceDetailRequest',
            'ReferenceBaseRequest' => '\Scraper\ScraperDPDTrace\StructType\ReferenceBaseRequest',
            'GetShipmentTraceByReferenceResponse' => '\Scraper\ScraperDPDTrace\StructType\GetShipmentTraceByReferenceResponse',
            'GetLastTrace' => '\Scraper\ScraperDPDTrace\StructType\GetLastTrace',
            'GetLastTraceRequest' => '\Scraper\ScraperDPDTrace\StructType\GetLastTraceRequest',
            'GetLastTraceBaseRequest' => '\Scraper\ScraperDPDTrace\StructType\GetLastTraceBaseRequest',
            'ArrayOfParcel' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfParcel',
            'Parcel' => '\Scraper\ScraperDPDTrace\StructType\Parcel',
            'GetLastTraceResponse' => '\Scraper\ScraperDPDTrace\StructType\GetLastTraceResponse',
            'ArrayOfGetLastTraceResponse' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceResponse',
            'GetLastTraceBaseResponse' => '\Scraper\ScraperDPDTrace\StructType\GetLastTraceBaseResponse',
            'GetLastTraceBc' => '\Scraper\ScraperDPDTrace\StructType\GetLastTraceBc',
            'GetLastTraceBcRequest' => '\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcRequest',
            'ArrayOfString' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfString',
            'GetLastTraceBcResponse' => '\Scraper\ScraperDPDTrace\StructType\GetLastTraceBcResponse',
            'ArrayOfGetLastTraceBcResponse' => '\Scraper\ScraperDPDTrace\ArrayType\ArrayOfGetLastTraceBcResponse',
        ];
    }
}
