<?php

namespace Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\AuthHandler;

use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Auth\CredentialsLoader;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Auth\FetchAuthTokenCache;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Auth\HttpHandler\HttpHandlerFactory;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Auth\Middleware\AuthTokenMiddleware;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Auth\Middleware\ScopedAccessTokenMiddleware;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\Google\Auth\Middleware\SimpleMiddleware;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\GuzzleHttp\Client;
use Automattic\WooCommerce\GoogleListingsAndAds\Vendor\GuzzleHttp\ClientInterface;
use Psr\Cache\CacheItemPoolInterface;

/**
 * This supports Guzzle 6
 */
class Guzzle6AuthHandler
{
    protected $cache;
    protected $cacheConfig;

<<<<<<< HEAD
    public function __construct(?CacheItemPoolInterface $cache = null, array $cacheConfig = [])
=======
    public function __construct(CacheItemPoolInterface $cache = null, array $cacheConfig = [])
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
    {
        $this->cache = $cache;
        $this->cacheConfig = $cacheConfig;
    }

    public function attachCredentials(
        ClientInterface $http,
        CredentialsLoader $credentials,
<<<<<<< HEAD
        ?callable $tokenCallback = null
=======
        callable $tokenCallback = null
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
    ) {
        // use the provided cache
        if ($this->cache) {
            $credentials = new FetchAuthTokenCache(
                $credentials,
                $this->cacheConfig,
                $this->cache
            );
        }

        return $this->attachCredentialsCache($http, $credentials, $tokenCallback);
    }

    public function attachCredentialsCache(
        ClientInterface $http,
        FetchAuthTokenCache $credentials,
<<<<<<< HEAD
        ?callable $tokenCallback = null
=======
        callable $tokenCallback = null
>>>>>>> 8d244dd10d2e32e461d508a54a2cfd79fc236c90
    ) {
        // if we end up needing to make an HTTP request to retrieve credentials, we
        // can use our existing one, but we need to throw exceptions so the error
        // bubbles up.
        $authHttp = $this->createAuthHttp($http);
        $authHttpHandler = HttpHandlerFactory::build($authHttp);
        $middleware = new AuthTokenMiddleware(
            $credentials,
            $authHttpHandler,
            $tokenCallback
        );

        $config = $http->getConfig();
        $config['handler']->remove('google_auth');
        $config['handler']->push($middleware, 'google_auth');
        $config['auth'] = 'google_auth';
        $http = new Client($config);

        return $http;
    }

    public function attachToken(ClientInterface $http, array $token, array $scopes)
    {
        $tokenFunc = function ($scopes) use ($token) {
            return $token['access_token'];
        };

        $middleware = new ScopedAccessTokenMiddleware(
            $tokenFunc,
            $scopes,
            $this->cacheConfig,
            $this->cache
        );

        $config = $http->getConfig();
        $config['handler']->remove('google_auth');
        $config['handler']->push($middleware, 'google_auth');
        $config['auth'] = 'scoped';
        $http = new Client($config);

        return $http;
    }

    public function attachKey(ClientInterface $http, $key)
    {
        $middleware = new SimpleMiddleware(['key' => $key]);

        $config = $http->getConfig();
        $config['handler']->remove('google_auth');
        $config['handler']->push($middleware, 'google_auth');
        $config['auth'] = 'simple';
        $http = new Client($config);

        return $http;
    }

    private function createAuthHttp(ClientInterface $http)
    {
        return new Client(['http_errors' => true] + $http->getConfig());
    }
}
