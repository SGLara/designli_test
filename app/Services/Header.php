<?php

namespace App\Services;

class Header
{
    public $name;

    public $value;

    public function __construct($data)
    {
        $this->name = $data['name'] ?? null;
        $this->value = $data['value'] ?? null;
    }
}
