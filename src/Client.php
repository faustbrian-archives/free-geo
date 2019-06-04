<?php

declare(strict_types=1);

/*
 * This file is part of FreeGeo PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\FreeGeo;

use Plients\Http\Http;

class Client
{
    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\FreeGeo\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('http://www.freegeoip.net/json/');

        $class = "Plients\\FreeGeo\\API\\{$name}";

        return new $class($client);
    }
}
