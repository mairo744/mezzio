<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Identical\FlipTypeControlToUseExclusiveTypeRector;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPhpSets(php82: true)
    ->withAttributesSets()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/test',
    ])
    ->withPreparedSets(
        codeQuality: true,
        typeDeclarations: true,
        privatization: true,
    )
    ->withSkip([
        FlipTypeControlToUseExclusiveTypeRector::class,
    ])
    ->withSkipPath(__DIR__ . '/test/TestAsset');
