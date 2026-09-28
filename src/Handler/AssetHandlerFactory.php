<?php

declare(strict_types=1);

namespace Adems\Asset\Handler;

use Mezzio\Template\TemplateRendererInterface;
use Psr\Container\ContainerInterface;

class AssetHandlerFactory
{
    public function __invoke(ContainerInterface $container) : AssetHandler
    {
        return new AssetHandler($container->get(TemplateRendererInterface::class));
    }
}