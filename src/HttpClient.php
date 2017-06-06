<?php

/*
 * This file is part of FreeGeo PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\FreeGeo;

use BrianFaust\Unified\AbstractHttpClient;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_url' => 'http://www.freegeoip.net/json/',
        'headers' => [
           'User-Agent' => 'BrianFaust/FreeGeo',
        ],
    ];
}
