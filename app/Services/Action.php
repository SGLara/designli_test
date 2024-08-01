<?php

namespace App\Services;

class Action
{
    public $type;

    public $topicArn;

    public function __construct($data)
    {
        $this->type = $data['type'] ?? null;
        $this->topicArn = $data['topicArn'] ?? null;
    }
}
