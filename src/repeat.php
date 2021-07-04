<?php

namespace Like4more;

class Repeat
{
    public static function sentence(?string $sentence = null): string
    {
        return $sentence ?? 'No sentence given.';
    }
}