<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__)
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
;

$config = new Config();
$config
    ->setRiskyAllowed(true)
    ->setUsingCache(true)
    ->setRules(['@PhpCsFixer' => true, '@PHP81Migration' => true])
    ->setFinder($finder)
;

return $config;
