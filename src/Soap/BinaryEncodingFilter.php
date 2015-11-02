<?php

namespace FPlus\Millennium\Soap;

use BeSimple\SoapCommon\SoapRequest;
use BeSimple\SoapCommon\SoapRequestFilter;
use BeSimple\SoapCommon\SoapResponse;
use BeSimple\SoapCommon\SoapResponseFilter;
use CasperBiering\Dotnet\BinaryXml\SoapDecoder;
use CasperBiering\Dotnet\BinaryXml\SoapEncoder;

class BinaryEncodingFilter implements SoapRequestFilter, SoapResponseFilter
{
    const CONTENT_TYPE = 'application/soap+msbin1';
    const DECODED_CONTENT_TYPE = 'application/soap+xml; charset=utf-8';

    private $encoder;

    private $decoder;

    public function __construct()
    {
        $this->encoder = new SoapEncoder();
        $this->decoder = new SoapDecoder();
    }

    public function resetFilter()
    {
    }

    public function filterRequest(SoapRequest $request)
    {
        $encoded = $this->encoder->encode($request->getContent());
        $request->setContent($encoded);
        $request->setContentType(self::CONTENT_TYPE);
    }

    public function filterResponse(SoapResponse $response)
    {
        if ($response->getContentType() === self::CONTENT_TYPE) {
            $decoded = $this->decoder->decode($response->getContent());
            $response->setContent($decoded);
            $response->setContentType(self::DECODED_CONTENT_TYPE);
        }
    }
}
