<?php
declare(strict_types = 1);

namespace popp\ch09\batch10;

/* listing 09.27 */
interface Encoder
{
    public function encode(): string;
}
