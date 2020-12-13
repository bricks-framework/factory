<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

namespace BricksFramework\Factory;

use BricksFramework\Container\PsrContainer;

interface FactoryInterface
{
    public function get(PsrContainer $container, string $class, array $arguments = []) : object;
}
