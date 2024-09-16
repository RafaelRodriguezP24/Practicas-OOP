<?php

namespace Medine;

final class HtmlNode
{
    protected string $tag;
    protected string $content;
    protected array $attributes = [];

    public function __construct(string $tag,string $content = null, array $attributes = [])
    {
        $this->tag = $tag;
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public static function __callStatic($method, array $args = [])
    {
        $content = $args[0] ?? null;
        $attributes = $args[1] ?? [];

        return new HtmlNode($method, $content, $attributes);
    }

    public function __call($method, array $args = [])
    {
        $this->attributes[$method] = $args[0];

        return $this;
    }

    public function render(): string
    {
     $result = "<{$this->tag} {$this->renderAttributes()}>";

        if ($this->content != null) {
            $result .= $this->content;
            $result .= "</{$this->tag}>";
        }

        return $result;
    }

    protected function renderAttributes(): string
    {
        $result = "";

        foreach ($this->attributes as $name => $value) {

            $result .= sprintf('%s="%s"', $name, $value);
        }

        return $result;
    }
}
