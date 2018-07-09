<?php

namespace avtomon;
/**
 * Класс ошибок
 *
 * Class RedisSingletonException
 * @package avtomon
 */
class RedisSingletonException extends CustomException
{
}

/**
 * Синглтон для Redis
 *
 * Class RedisSingleton
 * @package avtomon
 */
class RedisSingleton
{
    /**
     * Объекты подключений к Redis
     *
     * @var array
     */
    protected static $instances = [];

    /**
     * Синглтон создания объекта подключения к Redis
     *
     * @param string $hostOrSocket - хост или Unix-сокет
     * @param int $port - порт подключения
     *
     * @param float $timeout - время хранения записей
     * @param null $reserved
     * @param int $retryInterval - интервал попыток переподключения
     *
     * @return \Redis
     *
     * @throws RedisSingletonException
     */
    public static function create(
        string $hostOrSocket = '/var/run/redis.sock',
        int $port = 0,
        float $timeout = 0.0,
        $reserved = null,
        int $retryInterval = 0): \Redis
    {
        if (empty(self::$instances[$hostOrSocket])) {
            $redis = new \Redis();
            if ($redis->connect($hostOrSocket, $port, $timeout, $reserved, $retryInterval)) {
                self::$instances[$hostOrSocket] = $redis;
            } else {
                throw new RedisSingletonException ("Не удалось подключиться к хосту/сокету $hostOrSocket");
            }
        }

        return self::$instances[$hostOrSocket];
    }


}
