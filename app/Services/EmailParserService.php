<?php

namespace App\Services;

use eXorus\PhpMimeMailParser\Parser;

class EmailParserService
{
    public function getAttachments($mailFile): array
    {
        $parser = new Parser;
        $email = $parser->setPath($mailFile);

        $attachments = [];
        foreach ($email->getAttachments() as $attachment) {
            if ($attachment->getContentType() == 'application/json') {
                $attachments[] = json_decode($attachment->getContent(), true);
            }
        }

        return $attachments;
    }
}
