<?php

namespace App\Http\Controllers;

use App\Http\Requests\JsonObjectRequest;
use App\Http\Resources\EmailRecordResource;
use App\Services\EmailRecordService;
use JsonMapper\LaravelPackage\JsonMapperInterface;

class JsonMapperController extends Controller
{
    public function __construct(
        private JsonMapperInterface $jsonMapper
    ) {} // phpcs:ignore

    public function __invoke(JsonObjectRequest $request): EmailRecordResource
    {
        $data = $this->jsonMapper->mapToCollectionFromString(
            collect([$request->all()])->toJson(),
            new EmailRecordService($request->get('Records'))
        );

        return EmailRecordResource::make($data);
    }
}
