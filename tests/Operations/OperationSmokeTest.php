<?php

declare(strict_types=1);

namespace Prefabcortex\FedexRatesAndTransitTimesApi\Tests\Operations;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Prefabcortex\FedexRatesAndTransitTimesApi\Client;
use Prefabcortex\FedexRatesAndTransitTimesApi\ClientConfig;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\ApiException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Http\ValidationMode;
use Prefabcortex\FedexRatesAndTransitTimesApi\Optional\None;
use Prefabcortex\FedexRatesAndTransitTimesApi\Parameter\RateAndTransitTimesHeaderParameters;
use Prefabcortex\FedexRatesAndTransitTimesApi\Tests\Fixture\CannedResponse;
use Prefabcortex\FedexRatesAndTransitTimesApi\Tests\Fixture\RecordingHttpClient;
use RuntimeException;

use function sprintf;

/**
 * Every operation called once, against a client that records the request instead of sending it.
 *
 * Nothing leaves the process and no credentials are needed: PSR-18 is one method, so the client is
 * stood in for. What runs is everything up to the wire — the URI assembled, the query string
 * encoded, the body serialised. The client signs nothing.
 *
 * What is watched is the request: its method, and its path up to the first placeholder. These calls
 * go through the `…Raw()` methods, which hand the response back unparsed, so the canned answer
 * never has to match a status or content type from the description — an answer invented from that
 * document would say nothing about a client built from the same one.
 */
final class OperationSmokeTest extends TestCase
{
    private const string BASE_URL = 'https://smoke-test.invalid';

    /**
     * @throws InvalidArgumentException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesBuildsARequest(): void
    {
        $httpClient = new RecordingHttpClient(CannedResponse::empty());
        try {
            $client = Client::create(
                ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                    ValidationMode::Strict,
                ),
            );
            $client->rateAndTransitTimesRaw(None::create(), new RateAndTransitTimesHeaderParameters('smoke-test'));
        } catch (ApiException $error) {
            self::fail(sprintf('%s could not be called: %s', 'rateAndTransitTimes', $error->getMessage()));
        }
        $requests = $httpClient->getRequests();
        self::assertCount(1, $requests, 'the operation did not hand exactly one request to the HTTP client');
        foreach ($requests as $request) {
            self::assertSame('POST', $request->getMethod(), 'the request went out with another HTTP method');
            self::assertStringStartsWith(
                self::BASE_URL . '/rate/v1/rates/quotes',
                (string) $request->getUri(),
                'the request did not go to the operation\'s path below the configured base URL',
            );
        }
    }
}
