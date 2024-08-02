<?php

namespace App\Classes;

class Verdict
{
    public $status;

    public function __construct($data)
    {
        $this->status = $data['status'] ?? null;
    }
}
