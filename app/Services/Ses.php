<?php

namespace App\Services;

class Ses
{
    public $receipt;

    public $mail;

    public function __construct($data)
    {
        $this->receipt = new Receipt($data['receipt']);
        $this->mail = new Mail($data['mail']);
    }
}
