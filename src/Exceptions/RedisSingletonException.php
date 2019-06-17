<?php

namespace Scaleplan\Redis\Exceptions;

/**
 * Class RedisSingletonException
 *
 * @package Scaleplan\Redis\Exceptions
 */
class RedisSingletonException extends \Exception
{
    public const MESSAGE = 'Redis error.';
    public const CODE = 500;

    /**
     * RedisSingletonException constructor.
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message ?: static::MESSAGE, $code ?: static::CODE, $previous);
    }
}
