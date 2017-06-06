<?php

/*
 * This file is part of FreeGeo PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\FreeGeo\Api;

use BrianFaust\Unified\AbstractApi;
use BrianFaust\FreeGeo\Models\Location;

class Location extends AbstractApi
{
    public function details($addr)
    {
        $response = $this->get($addr);

        return $this->getMapper()->raw($response);
    }
}
