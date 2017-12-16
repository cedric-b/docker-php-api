<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Resource;

use Jane\OpenApiRuntime\Client\QueryParam;

trait ServiceAsyncResourceTrait
{
    /**
     * @param array $parameters {
     *
     *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the services list. Available filters:

     * }
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\ServiceListInternalServerErrorException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|\Docker\API\Model\Service>
     */
    public function serviceList(array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->setDefault('filters', null);
            $url = '/v1.25/services';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'GET');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatusCode()) {
                    return $this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\Service[]', 'json');
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceListInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param \Docker\API\Model\ServicesCreatePostBody $body
     * @param array                                    $parameters {
     *
     *     @var string $X-Registry-Auth A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication)
     * }
     *
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\ServiceCreateForbiddenException
     * @throws \Docker\API\Exception\ServiceCreateConflictException
     * @throws \Docker\API\Exception\ServiceCreateInternalServerErrorException
     * @throws \Docker\API\Exception\ServiceCreateServiceUnavailableException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|\Docker\API\Model\ServicesCreatePostResponse201>
     */
    public function serviceCreate(\Docker\API\Model\ServicesCreatePostBody $body, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($body, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->setDefault('X-Registry-Auth', null);
            $queryParam->setHeaderParameters(['X-Registry-Auth']);
            $url = '/v1.25/services/create';
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
            $body = $this->serializer->serialize($body, 'json');
            $request = new \Amp\Artax\Request($url, 'POST');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (201 === $response->getStatusCode()) {
                    return $this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ServicesCreatePostResponse201', 'json');
                }
                if (403 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceCreateForbiddenException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (409 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceCreateConflictException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceCreateInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (503 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceCreateServiceUnavailableException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param string                 $id                ID or name of service
     * @param array                  $parameters        List of parameters
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\ServiceDeleteNotFoundException
     * @throws \Docker\API\Exception\ServiceDeleteInternalServerErrorException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function serviceDelete(string $id, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($id, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $url = '/v1.25/services/{id}';
            $url = str_replace('{id}', urlencode($id), $url);
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'DELETE');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatusCode()) {
                    return null;
                }
                if (404 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceDeleteNotFoundException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceDeleteInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param string                 $id                ID or name of service
     * @param array                  $parameters        List of parameters
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\ServiceInspectNotFoundException
     * @throws \Docker\API\Exception\ServiceInspectInternalServerErrorException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|\Docker\API\Model\Service>
     */
    public function serviceInspect(string $id, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($id, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $url = '/v1.25/services/{id}';
            $url = str_replace('{id}', urlencode($id), $url);
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost'], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'GET');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatusCode()) {
                    return $this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\Service', 'json');
                }
                if (404 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceInspectNotFoundException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceInspectInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * @param string                                     $id         ID or name of service
     * @param \Docker\API\Model\ServicesIdUpdatePostBody $body
     * @param array                                      $parameters {
     *
     *     @var int $version The version number of the service object being updated. This is required to avoid conflicting writes.
     *     @var string $registryAuthFrom If the X-Registry-Auth header is not specified, this parameter indicates where to find registry authorization credentials. The valid values are `spec` and `previous-spec`.
     *     @var string $X-Registry-Auth A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication)
     * }
     *
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\ServiceUpdateNotFoundException
     * @throws \Docker\API\Exception\ServiceUpdateInternalServerErrorException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|\Docker\API\Model\ImageDeleteResponse>
     */
    public function serviceUpdate(string $id, \Docker\API\Model\ServicesIdUpdatePostBody $body, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($id, $body, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->setRequired('version');
            $queryParam->setDefault('registryAuthFrom', 'spec');
            $queryParam->setDefault('X-Registry-Auth', null);
            $queryParam->setHeaderParameters(['X-Registry-Auth']);
            $url = '/v1.25/services/{id}/update';
            $url = str_replace('{id}', urlencode($id), $url);
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost', 'Accept' => ['application/json'], 'Content-Type' => 'application/json'], $queryParam->buildHeaders($parameters));
            $body = $this->serializer->serialize($body, 'json');
            $request = new \Amp\Artax\Request($url, 'POST');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (200 === $response->getStatusCode()) {
                    return $this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ImageDeleteResponse', 'json');
                }
                if (404 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceUpdateNotFoundException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceUpdateInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }

    /**
     * Get `stdout` and `stderr` logs from a service.

     **Note**: This endpoint works only for services with the `json-file` or `journald` logging drivers.

     *
     * @param string $id         ID or name of the container
     * @param array  $parameters {
     *
     *     @var bool $details show extra details provided to logs
     *     @var bool $follow return the logs as a stream

     *     @var bool $stdout Return logs from `stdout`
     *     @var bool $stderr Return logs from `stderr`
     *     @var int $since Only return logs since this time, as a UNIX timestamp
     *     @var bool $timestamps Add timestamps to every log line
     *     @var string $tail Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.
     * }
     *
     * @param string                 $fetch             Fetch mode (object or response)
     * @param \Amp\CancellationToken $cancellationToken Token to cancel the request
     *
     * @throws \Docker\API\Exception\ServiceLogsNotFoundException
     * @throws \Docker\API\Exception\ServiceLogsInternalServerErrorException
     *
     * @return \Amp\Promise<\Amp\Artax\Response|null>
     */
    public function serviceLogs(string $id, array $parameters = [], string $fetch = self::FETCH_OBJECT, \Amp\CancellationToken $cancellationToken = null): \Amp\Promise
    {
        return \Amp\call(function () use ($id, $parameters, $fetch, $cancellationToken) {
            $queryParam = new QueryParam();
            $queryParam->setDefault('details', false);
            $queryParam->setDefault('follow', false);
            $queryParam->setDefault('stdout', false);
            $queryParam->setDefault('stderr', false);
            $queryParam->setDefault('since', 0);
            $queryParam->setDefault('timestamps', false);
            $queryParam->setDefault('tail', 'all');
            $url = '/v1.25/services/{id}/logs';
            $url = str_replace('{id}', urlencode($id), $url);
            $url = $url . ('?' . $queryParam->buildQueryString($parameters));
            $headers = array_merge(['Host' => 'localhost', 'Accept' => ['application/json']], $queryParam->buildHeaders($parameters));
            $body = $queryParam->buildFormDataString($parameters);
            $request = new \Amp\Artax\Request($url, 'GET');
            $request = $request->withHeaders($headers);
            $request = $request->withBody($body);
            $response = (yield $this->httpClient->request($request, [], $cancellationToken));
            if (self::FETCH_OBJECT === $fetch) {
                if (101 === $response->getStatusCode()) {
                    return null;
                }
                if (200 === $response->getStatusCode()) {
                    return null;
                }
                if (404 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceLogsNotFoundException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
                if (500 === $response->getStatusCode()) {
                    throw new \Docker\API\Exception\ServiceLogsInternalServerErrorException($this->serializer->deserialize((yield $response->getBody()), 'Docker\\API\\Model\\ErrorResponse', 'json'));
                }
            }

            return $response;
        });
    }
}
