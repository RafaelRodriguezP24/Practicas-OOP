<?php

namespace Medine;
class HtmlLogger implements Logger
{
    public function info(string $message) : void
    {
            echo "<p>$message</p>";
    }
}
