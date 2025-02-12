<?php

declare(strict_types=1);

namespace Micromus\KafkaBusSpiral\Bootloader;

use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Core\Container;
use Spiral\Config\ConfiguratorInterface;
use Micromus\KafkaBusSpiral\Commands;
use Micromus\KafkaBusSpiral\Config\KafkaBusSpiralConfig;
use Spiral\Console\Bootloader\ConsoleBootloader;

final class KafkaBusSpiralBootloader extends Bootloader
{
    protected const BINDINGS = [];
    protected const SINGLETONS = [];
    protected const DEPENDENCIES = [];

    public function __construct(
        private readonly ConfiguratorInterface $config
    ) {
    }

    public function init(ConsoleBootloader $console): void
    {
        $this->initConfig();

        $console->addCommand(Commands\KafkaBusSpiralCommand::class);
    }

    public function boot(Container $container): void
    {
    }

    private function initConfig(): void
    {
        $this->config->setDefaults(
            KafkaBusSpiralConfig::CONFIG,
            []
        );
    }
}
