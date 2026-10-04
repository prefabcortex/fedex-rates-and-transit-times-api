<?php

declare(strict_types=1);

namespace Prefabcortex\FedexRatesAndTransitTimesApi\Tests\Operations;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Prefabcortex\FedexRatesAndTransitTimesApi\Client;
use Prefabcortex\FedexRatesAndTransitTimesApi\ClientConfig;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\ApiException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\MalformedDataException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesBadRequestException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesForbiddenException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesInternalServerErrorException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesNotFoundException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesServiceUnavailableException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\RateAndTransitTimesUnauthorizedException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\UnexpectedContentTypeException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Exception\UnexpectedStatusCodeException;
use Prefabcortex\FedexRatesAndTransitTimesApi\Http\JsonBody;
use Prefabcortex\FedexRatesAndTransitTimesApi\Http\ValidationMode;
use Prefabcortex\FedexRatesAndTransitTimesApi\Optional\None;
use Prefabcortex\FedexRatesAndTransitTimesApi\Parameter\RateAndTransitTimesHeaderParameters;
use Prefabcortex\FedexRatesAndTransitTimesApi\Tests\Fixture\CannedResponse;
use Prefabcortex\FedexRatesAndTransitTimesApi\Tests\Fixture\ModelFixtures;
use Prefabcortex\FedexRatesAndTransitTimesApi\Tests\Fixture\RecordingHttpClient;
use RuntimeException;

use function sprintf;

/**
 * Every response an operation reads, answered once through the method that reads it.
 *
 * A recorded client answers with the status and content type of one branch and a body built from
 * the model fixtures; the test checks that the model comes back, or the declared exception with the
 * response still readable. A status no response declares and a declared status under the wrong
 * content type are answered too.
 *
 * What this cannot show: that the service sends these documents. They come from the same
 * description the client came from, so this proves the package reads what it promises.
 */
final class OperationResponseTest extends TestCase
{
    private const string BASE_URL = 'https://response-test.invalid';

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesReads200(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildRatcResponseVO());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(200, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $result = $client->rateAndTransitTimes(
                None::create(),
                new RateAndTransitTimesHeaderParameters('smoke-test'),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'rateAndTransitTimes', 200, $error::class, $error->getMessage()),
            );
        }
        self::assertEquals(ModelFixtures::buildRatcResponseVO(), $result);
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesReads400(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(400, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->rateAndTransitTimes(None::create(), new RateAndTransitTimesHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw RateAndTransitTimesBadRequestException for its %d response',
                    'rateAndTransitTimes',
                    400,
                ),
            );
        } catch (RateAndTransitTimesBadRequestException $exception) {
            self::assertSame(400, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO(), $exception->getErrorResponseVO());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'rateAndTransitTimes', 400, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesReads401(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO401());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(401, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->rateAndTransitTimes(None::create(), new RateAndTransitTimesHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw RateAndTransitTimesUnauthorizedException for its %d response',
                    'rateAndTransitTimes',
                    401,
                ),
            );
        } catch (RateAndTransitTimesUnauthorizedException $exception) {
            self::assertSame(401, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO401(), $exception->getErrorResponseVO401());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'rateAndTransitTimes', 401, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesReads403(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO403());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(403, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->rateAndTransitTimes(None::create(), new RateAndTransitTimesHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw RateAndTransitTimesForbiddenException for its %d response',
                    'rateAndTransitTimes',
                    403,
                ),
            );
        } catch (RateAndTransitTimesForbiddenException $exception) {
            self::assertSame(403, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO403(), $exception->getErrorResponseVO403());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'rateAndTransitTimes', 403, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesReads404(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO404());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(404, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->rateAndTransitTimes(None::create(), new RateAndTransitTimesHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw RateAndTransitTimesNotFoundException for its %d response',
                    'rateAndTransitTimes',
                    404,
                ),
            );
        } catch (RateAndTransitTimesNotFoundException $exception) {
            self::assertSame(404, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO404(), $exception->getErrorResponseVO404());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'rateAndTransitTimes', 404, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesReads500(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO500());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(500, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->rateAndTransitTimes(None::create(), new RateAndTransitTimesHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw RateAndTransitTimesInternalServerErrorException for its %d response',
                    'rateAndTransitTimes',
                    500,
                ),
            );
        } catch (RateAndTransitTimesInternalServerErrorException $exception) {
            self::assertSame(500, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO500(), $exception->getErrorResponseVO500());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'rateAndTransitTimes', 500, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesReads503(): void
    {
        $body = JsonBody::encode(ModelFixtures::buildErrorResponseVO503());
        $httpClient = new RecordingHttpClient(CannedResponse::answering(503, 'application/json', $body));
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->rateAndTransitTimes(None::create(), new RateAndTransitTimesHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw RateAndTransitTimesServiceUnavailableException for its %d response',
                    'rateAndTransitTimes',
                    503,
                ),
            );
        } catch (RateAndTransitTimesServiceUnavailableException $exception) {
            self::assertSame(503, $exception->getResponse()->getStatusCode());
            self::assertEquals(ModelFixtures::buildErrorResponseVO503(), $exception->getErrorResponseVO503());
            self::assertSame($body, $exception->getRawResponse());
            self::assertSame($body, $exception->getResponse()->getBody()->getContents());
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'rateAndTransitTimes', 503, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesRejectsAnUndeclaredStatus(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                599,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->rateAndTransitTimes(None::create(), new RateAndTransitTimesHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedStatusCodeException for a %d response it cannot read',
                    'rateAndTransitTimes',
                    599,
                ),
            );
        } catch (UnexpectedStatusCodeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'rateAndTransitTimes', 599, $error::class, $error->getMessage()),
            );
        }
    }

    /**
     * @throws InvalidArgumentException
     * @throws MalformedDataException
     * @throws RuntimeException
     */
    public function testRateAndTransitTimesRejectsAnUndeclaredContentType(): void
    {
        $httpClient = new RecordingHttpClient(
            CannedResponse::answering(
                200,
                'text/html',
                '<html><body>Served by something in front of the API</body></html>',
            ),
        );
        $client = Client::create(
            ClientConfig::forBaseUrl(self::BASE_URL)->withHttpClient($httpClient)->withValidation(
                ValidationMode::Strict,
            ),
        );
        try {
            $client->rateAndTransitTimes(None::create(), new RateAndTransitTimesHeaderParameters('smoke-test'));
            self::fail(
                sprintf(
                    '%s did not throw UnexpectedContentTypeException for a %d response it cannot read',
                    'rateAndTransitTimes',
                    200,
                ),
            );
        } catch (UnexpectedContentTypeException $exception) {
            self::assertSame(
                '<html><body>Served by something in front of the API</body></html>',
                $exception->getResponse()->getBody()->getContents(),
            );
        } catch (ApiException $error) {
            self::fail(
                sprintf('%s answered %d with %s: %s', 'rateAndTransitTimes', 200, $error::class, $error->getMessage()),
            );
        }
    }
}
