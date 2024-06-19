<?php

namespace App\Services;

class TestMemoryLeakerService
{
    // Static array object
    public static array $staticArray = [];

    // Non-static array object
    public array $array = [];
}
