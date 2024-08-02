<?php

namespace App\Services;

use App\Classes\Ses;

class EmailRecordService
{
    public $eventVersion;

    public $ses;

    public $eventSource;

    public function __construct($data)
    {
        $data = $data[0] ?? [];
        $this->eventVersion = $data['eventVersion'] ?? null;
        $this->ses = new Ses($data['ses']);
        $this->eventSource = $data['eventSource'] ?? null;
    }
}
