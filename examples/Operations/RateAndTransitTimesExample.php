<?php

declare(strict_types=1);

namespace Prefabcortex\FedexRatesAndTransitTimesApi\Examples\Operations;

use Prefabcortex\FedexRatesAndTransitTimesApi\Client;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\ApiException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\MalformedResponseException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesBadRequestException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesForbiddenException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesInternalServerErrorException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesNotFoundException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesServiceUnavailableException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesUnauthorizedException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\ResponseValidationException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\TransportException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\UnexpectedContentTypeException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\UnexpectedStatusCodeException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\UnsupportedValueException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Model\RatcResponseVO;
use Prefabcortex\FedexRatesAndTransitTimesApi\Optional\Option;
use Prefabcortex\FedexRatesAndTransitTimesApi\Parameter\RateAndTransitTimesHeaderParameters;

final class RateAndTransitTimesExample
{
    /**
     * This endpoint provides the ability to retrieve rate quotes and optionalll transit
     * information. The rate is calculated based on the origin and destination of the shipment.
     * Additional information such as carrier code, service type, or service option can be used to
     * filter the results. If carrier code is provided, the response includes the rate quotes for
     * the specific transportation carrier. This endpoint provides the rates for FedEx Ground and
     * FedEx Express and does not offer rates for FedEx Freight.
     *
     * <i>Note: FedEx APIs do not support Cross-Origin Resource Sharing (CORS) mechanism.</i>
     *
     * Usage: pass a Client; this API declares no security scheme.
     *
     *   $client = Client::create($config);
     *   $headerParameters = new RateAndTransitTimesHeaderParameters($authorization);
     *   RateAndTransitTimesExample::rateAndTransitTimes($client, $requestBody, $headerParameters);
     *
     * @param Option<mixed> $requestBody
     *
     * @throws ApiException
     * @throws UnsupportedValueException
     * @throws TransportException
     * @throws ResponseValidationException
     * @throws MalformedResponseException
     * @throws RateAndTransitTimesBadRequestException
     * @throws RateAndTransitTimesUnauthorizedException
     * @throws RateAndTransitTimesForbiddenException
     * @throws RateAndTransitTimesNotFoundException
     * @throws RateAndTransitTimesInternalServerErrorException
     * @throws RateAndTransitTimesServiceUnavailableException
     * @throws UnexpectedContentTypeException
     * @throws UnexpectedStatusCodeException
     */
    public static function rateAndTransitTimes(
        Client $client,
        Option $requestBody,
        RateAndTransitTimesHeaderParameters $headerParameters,
    ): RatcResponseVO {
        return $client->rateAndTransitTimes(
            $requestBody,
            $headerParameters,
        );
    }
}
