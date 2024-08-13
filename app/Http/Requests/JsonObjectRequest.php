<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JsonObjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Records' => ['required', 'array'],
            'Records.*.eventVersion' => ['required', 'string'],
            'Records.*.eventSource' => ['required', 'string'],
            'Records.*.ses.receipt.timestamp' => ['required', 'date'],
            'Records.*.ses.receipt.processingTimeMillis' => ['required', 'integer'],
            'Records.*.ses.receipt.recipients' => ['required', 'array'],
            'Records.*.ses.receipt.recipients.*' => ['required', 'email'],
            'Records.*.ses.receipt.spamVerdict.status' => ['required', 'string'],
            'Records.*.ses.receipt.virusVerdict.status' => ['required', 'string'],
            'Records.*.ses.receipt.spfVerdict.status' => ['required', 'string'],
            'Records.*.ses.receipt.dkimVerdict.status' => ['required', 'string'],
            'Records.*.ses.receipt.dmarcVerdict.status' => ['required', 'string'],
            'Records.*.ses.receipt.dmarcPolicy' => ['nullable', 'string'],
            'Records.*.ses.receipt.action.type' => ['required', 'string'],
            'Records.*.ses.receipt.action.topicArn' => ['required', 'string'],
            'Records.*.ses.mail.timestamp' => ['required', 'date'],
            'Records.*.ses.mail.source' => ['required', 'email'],
            'Records.*.ses.mail.messageId' => ['required', 'string'],
            'Records.*.ses.mail.destination' => ['required', 'array'],
            'Records.*.ses.mail.destination.*' => ['required', 'email'],
            'Records.*.ses.mail.headersTruncated' => ['required', 'boolean'],
            'Records.*.ses.mail.headers' => ['required', 'array'],
            'Records.*.ses.mail.headers.*.name' => ['required', 'string'],
            'Records.*.ses.mail.headers.*.value' => ['required', 'string'],
            'Records.*.ses.mail.commonHeaders.returnPath' => ['required', 'email'],
            'Records.*.ses.mail.commonHeaders.from' => ['required', 'array'],
            'Records.*.ses.mail.commonHeaders.from.*' => ['required', 'email'],
            'Records.*.ses.mail.commonHeaders.date' => ['required', 'date'],
            'Records.*.ses.mail.commonHeaders.to' => ['required', 'array'],
            'Records.*.ses.mail.commonHeaders.to.*' => ['required', 'email'],
            'Records.*.ses.mail.commonHeaders.messageId' => ['required', 'string'],
            'Records.*.ses.mail.commonHeaders.subject' => ['required', 'string'],
        ];
    }
}
