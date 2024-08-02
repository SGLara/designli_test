<?php

namespace App\Classes;

class CommonHeaders
{
    public $returnPath;

    public $from;

    public $date;

    public $to;

    public $messageId;

    public $subject;

    public function __construct($data)
    {
        $this->returnPath = $data['returnPath'] ?? null;
        $this->from = $data['from'] ?? [];
        $this->date = $data['date'] ?? null;
        $this->to = $data['to'] ?? [];
        $this->messageId = $data['messageId'] ?? null;
        $this->subject = $data['subject'] ?? null;
    }
}
