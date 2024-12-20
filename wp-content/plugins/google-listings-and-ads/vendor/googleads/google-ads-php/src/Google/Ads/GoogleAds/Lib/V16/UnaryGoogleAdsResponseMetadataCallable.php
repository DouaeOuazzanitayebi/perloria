<?php

/*
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Lib\V16;

use Google\Ads\GoogleAds\Lib\GoogleAdsMiddlewareAbstract;
use Google\ApiCore\Call;
use Google\ApiCore\Middleware\ResponseMetadataMiddleware;
<<<<<<< HEAD
use GuzzleHttp\Promise\Promise;
use GuzzleHttp\Promise\PromiseInterface;
=======
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90

/**
 * Callable for returning `GoogleAdsResponseMetadata` from unary calls to the API.
 */
class UnaryGoogleAdsResponseMetadataCallable extends GoogleAdsMiddlewareAbstract
{
    use GoogleAdsMetadataTrait;

<<<<<<< HEAD
    private $adsClient;

    public function __construct(callable $nextHandler = null, $adsClient = null)
    {
        $this->adsClient = $adsClient;
        parent::__construct($nextHandler);
    }
    /**
     * @param Call $call the current request
     * @param array $options the optional parameters
     * @return array|PromiseInterface the two-member array of
=======
    /**
     * @param Call $call the current request
     * @param array $options the optional parameters
     * @return array|\GuzzleHttp\Promise\PromiseInterface the two-member array of
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
     *     response and metadata if `withResponseMetadata` is specified as an option;
     *     Or else, the `Promise` interface of the next handler
     */
    public function __invoke(Call $call, array $options)
    {
<<<<<<< HEAD
        $next = $this->getNextHandler();
        if (empty($options['withResponseMetadata'])) {
            // Bypass this middleware if the option is not set.
            return $next($call, $options)->then(
                function ($response) {
                    // Reset the metadata to null.
                    $this->adsClient->setResponseMetadata(null);
                    return $response;
                }
            );
        }

        $metadataReceiver = new Promise();
        $options['metadataCallback'] = function ($metadata) use ($metadataReceiver) {
            $metadataReceiver->resolve($metadata);
        };
        return $next($call, $options)->then(
            function ($response) use ($metadataReceiver) {
                $metadata = null;
                if ($metadataReceiver->getState() === PromiseInterface::FULFILLED) {
                    $metadata = new GoogleAdsResponseMetadata($metadataReceiver->wait());
                }
                $this->adsClient->setResponseMetadata($metadata);

                return $response;
            }
        );
=======
        if (!empty($options['withResponseMetadata'])) {
            $next = new ResponseMetadataMiddleware($this->getNextHandler());
            return $next($call, $options)->then(function ($responseList) {
                list($response, $metadata) = $responseList;
                return [$response, new GoogleAdsResponseMetadata($metadata)];
            });
        } else {
            $next = $this->getNextHandler();
            return $next($call, $options);
        }
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
    }
}
