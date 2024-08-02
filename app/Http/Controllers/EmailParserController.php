<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Http\Resources\EmailAttachmentsResource;
use App\Services\EmailParserService;

class EmailParserController extends Controller
{
    public function __construct(
        private EmailParserService $emailParserService
    ) {} //phpcs:ignore

    public function __invoke(EmailRequest $request)
    {
        $file = $request->file('file');

        $attachments = $this->emailParserService->getAttachments($file);

        return EmailAttachmentsResource::collection($attachments);
    }
}
