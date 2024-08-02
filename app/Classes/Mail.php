<?php

namespace App\Classes;

class Mail
{
    public $timestamp;

    public $source;

    public $messageId;

    public $destination;

    public $headersTruncated;

    public $headers;

    public $commonHeaders;

    public function __construct($data)
    {
        $this->timestamp = $data['timestamp'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->messageId = $data['messageId'] ?? null;
        $this->destination = $data['destination'] ?? [];
        $this->headersTruncated = $data['headersTruncated'] ?? false;
        $this->headers = array_map(function ($header) {
            return new Header($header);
        }, $data['headers']);
        $this->commonHeaders = new CommonHeaders($data['commonHeaders']);
    }
}
