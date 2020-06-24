<?php

namespace Scaleplan\Redis\Exceptions;

use function Scaleplan\Translator\translate;

/**
 * Class RedisSingletonException
 *
 * @package Scaleplan\Redis\Exceptions
 */
class RedisSingletonException extends \Exception
{
    public const MESSAGE = 'redis-singleton.redis-error';
    public const CODE = 500;

    /**
     * RedisSingletonException constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     */
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct(
            $message ?: translate(static::MESSAGE) ?: static::MESSAGE,
            $code ?: static::CODE,
            $previous
        );
    }
}
