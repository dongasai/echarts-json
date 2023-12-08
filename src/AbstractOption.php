<?php

namespace EchartsJson;

/**
 * 配置项基类
 *
 */
abstract class AbstractOption implements \ArrayAccess, \JsonSerializable
{

    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset))
            $this->$offset = new $this->getClass(static::class, $offset);

        return $this->$offset;
    }


    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->$offset[$offset]);
    }

    protected function getClass()
    {

    }

    public function toArray()
    {
        $data = get_object_vars($this);
        return $data;
    }

    public function jsonSerialize(): string
    {
        return json_encode($this->toArray());
    }

}