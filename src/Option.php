<?php

namespace EchartsJson;

/**
 * 配置项基类
 *
 */
abstract class AbstractOption implements \ArrayAccess, \JsonSerializable
{

    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset))
            $this->$offset = new $this->getClass(static::class, $offset);

        return $this->$offset;
    }


    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset[$offset]);
    }

    protected function getClass()
    {

    }

    public function toArray()
    {
        $list = get_object_vars($this);

    }

    public function jsonSerialize(): string
    {
        return json_encode($this->toArray());
    }

}