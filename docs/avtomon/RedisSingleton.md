<small>avtomon</small>

RedisSingleton
==============

Синглтон для Redis

Описание
-----------

Class RedisSingleton

Сигнатура
---------

- **class**.

Свойства
----------

class устанавливает следующие свойства:

- [`$instances`](#$instances) &mdash; Объекты подключений к Redis

### `$instances` <a name="instances"></a>

Объекты подключений к Redis

#### Сигнатура

- **protected static** property.
- Значение `array`.

Методы
-------

Методы класса class:

- [`create()`](#create) &mdash; Синглтон создания объекта подключения к Redis

### `create()` <a name="create"></a>

Синглтон создания объекта подключения к Redis

#### Сигнатура

- **public static** method.
- Может принимать следующий параметр(ы):
    - `$hostOrSocket` (`string`) &mdash; - хост или Unix-сокет
    - `$port` (`int`) &mdash; - порт подключения
    - `$timeout` (`float`) &mdash; - время хранения записей
    - `$reserved` (`null`)
    - `$retryInterval` (`int`) &mdash; - интервал попыток переподключения
- Возвращает `Redis` value.
- Выбрасывает одно из следующих исключений:
    - [`avtomon\RedisSingletonException`](../avtomon/RedisSingletonException.md)

