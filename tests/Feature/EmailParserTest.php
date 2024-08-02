<?php

use Illuminate\Http\UploadedFile;

use function Pest\Laravel\postJson;

test('email parser endpoint return a response', function () {
    $file = UploadedFile::fake()->createWithContent('email-test.eml', file_get_contents(base_path('tests/fixtures/email-test.eml')));

    postJson('api/email-parser', [
        'file' => $file,
    ])
        ->assertStatus(200)
        ->assertJsonStructure([
            'data' => [
                '*' => [
                    'Records' => [
                        [
                            'eventVersion',
                            'ses' => [
                                'receipt' => [
                                    'timestamp',
                                    'processingTimeMillis',
                                    'recipients',
                                    'spamVerdict',
                                    'virusVerdict',
                                    'spfVerdict',
                                    'dkimVerdict',
                                    'dmarcVerdict',
                                    'dmarcPolicy',
                                    'action',
                                ],
                                'mail' => [
                                    'timestamp',
                                    'source',
                                    'messageId',
                                    'destination',
                                    'headersTruncated',
                                    'headers',
                                    'commonHeaders' => [
                                        'returnPath',
                                        'from',
                                        'date',
                                        'to',
                                        'messageId',
                                        'subject',
                                    ],
                                ],
                            ],
                            'eventSource',
                        ],
                    ],
                ],
            ],
        ]);
});
