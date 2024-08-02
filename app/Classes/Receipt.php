<?php

namespace App\Classes;

class Receipt
{
    public $timestamp;

    public $processingTimeMillis;

    public $recipients;

    public $spamVerdict;

    public $virusVerdict;

    public $spfVerdict;

    public $dkimVerdict;

    public $dmarcVerdict;

    public $dmarcPolicy;

    public $action;

    public function __construct($data)
    {
        $this->timestamp = $data['timestamp'] ?? null;
        $this->processingTimeMillis = $data['processingTimeMillis'] ?? null;
        $this->recipients = $data['recipients'] ?? [];
        $this->spamVerdict = new Verdict($data['spamVerdict']);
        $this->virusVerdict = new Verdict($data['virusVerdict']);
        $this->spfVerdict = new Verdict($data['spfVerdict']);
        $this->dkimVerdict = new Verdict($data['dkimVerdict']);
        $this->dmarcVerdict = new Verdict($data['dmarcVerdict']);
        $this->dmarcPolicy = $data['dmarcPolicy'] ?? null;
        $this->action = new Action($data['action']);
    }
}
