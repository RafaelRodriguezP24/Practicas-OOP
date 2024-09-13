<?php

namespace Medine;

abstract class Model
{
    protected array $attributes = [];
    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function fill(array $attributes = []): void
    {
        $this->attributes = $attributes;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function getAttribute($name): ?string
    {
        $value = $this->getAttributeValue($name);

        if($this->hasGetMutator($name)){
            return $this->mutateAttribute($name, $value);
        }

        return $value;
    }

    protected function hasGetMutator($name): bool
    {
        return method_exists($this, 'get'.Str::studly($name).'Attribute');
    }

    protected function mutateAttribute($name,  $value): string
    {
        return $this->{'get'.Str::studly($name).'Attribute'}($value);
    }

    public function getAttributeValue($name)
    {
        if (array_key_exists($name, $this->attributes)){
            return $this->attributes[$name];
        }
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