<?php

namespace Medine;
class HtmlLogger implements Logger
{
    public function info($message) : void
    {
            echo "<p>$message</p>";
    }
}
