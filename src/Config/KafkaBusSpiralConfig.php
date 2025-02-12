<?php

declare(strict_types=1);

namespace Micromus\KafkaBusSpiral\Config;

use Spiral\Core\InjectableConfig;

final class KafkaBusSpiralConfig extends InjectableConfig
{
    public const CONFIG = 'kafka-bus-spiral';
    protected array $config = [
        'topic_prefix' => 'test',
        'topics' => []
    ];
}
