<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Pool;

use Hyperf\Contract\FrequencyInterface;

abstract class Frequency implements FrequencyInterface
{
    /**
     * Is it low frequency ?
     */
    abstract public function isLowFrequency(): bool;
}