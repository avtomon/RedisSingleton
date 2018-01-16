<?php

namespace avtomon;

class RedisSingletonException extends \Exception
{
}

class RedisSingleton
{
    private static $instance = null;

    public static function create($socket = '/var/run/redis.sock')
    {
        if (!self::$instance) {
            $redis = new \Redis();
            if ($redis->connect($socket)) {
                self::$instance = $redis;
            } else {
                throw new RedisSingletonException ('Не удалось подключиться к сокету Redis');
            }
        }

        return self::$instance;
    }
}
