<?php

namespace Medine;

class User
{
    protected array $attributes = [];
    public function __construct(array $attributes = [])
    {
        $this->setAttributes($attributes);
    }

    public function setAttributes(array $attributes = []): void
    {
        $this->attributes = $attributes;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getAttribute($name): ?string
    {
        if (array_key_exists($name, $this->attributes)){
            return $this->attributes[$name];
        }
        return null;
    }

    public function setAttribute($name, $value): void
    {
        $this->attributes[$name] = $value;
    }

    public function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }
    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }
    public function __unset($name)
    {
        unset($this->attributes[$name]);
    }
}

