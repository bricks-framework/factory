<?php

/** @copyright Sven Ullmann <kontakt@sumedia-webdesign.de> **/

declare(strict_types=1);

namespace BricksFramework\Factory;

use BricksFramework\Container\PsrContainer;

class Factory implements FactoryInterface
{
    const SERVICE_NAME = 'bricks/factory';

    /**
     * @var callable
     */
    protected $callbackFactory;

    public function __construct(callable $callbackFactory = null)
    {
        $this->callbackFactory = $callbackFactory;
    }

    public function get(PsrContainer $container, string $class, array $params = []): object
    {
        if (null !== $this->callbackFactory) {
            return $this->callbackFactory($container, $class, $params);
        } else {
            return new $class(...array_values($params));
        }
    }
}
