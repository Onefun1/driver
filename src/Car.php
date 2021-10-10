<?php

namespace Driver;

class Car
{
    public function start()
    {
        return 'Engine on' . PHP_EOL;
    }

    public function move($speed)
    {
        return 'I am moving with speed - ' . $speed . PHP_EOL;
    }
}