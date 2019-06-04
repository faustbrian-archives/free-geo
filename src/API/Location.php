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

namespace Plients\FreeGeo\API;

use Plients\Http\HttpResponse;

class Location extends AbstractAPI
{
    /**
     * Get details about the given ip address.
     *
     * @param string $addr
     *
     * @return \Plients\Http\HttpResponse
     */
    public function details(string $addr): HttpResponse
    {
        return $this->client->get($addr);
    }
}
