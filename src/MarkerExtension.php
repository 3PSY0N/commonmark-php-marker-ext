<?php

declare(strict_types=1);

namespace ThreeP\CommonmarkPhpMarkerExt;

use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Extension\ExtensionInterface;

final class MarkerExtension implements ExtensionInterface
{
    public function register(EnvironmentBuilderInterface $environment): void
    {
        $environment->addDelimiterProcessor(new MarkerDelimiterProcessor());
        $environment->addRenderer(Marker::class, new MarkerRenderer());
    }
}

