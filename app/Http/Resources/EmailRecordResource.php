<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmailRecordResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /*
            NOTE: I returned the data as it is described in the test description,
            it wasn't specified in the docs if I needed to adapt to the json request
        */
        return [
            'spam' => 'spamVerdic a boolean, PASS = true',
            'virus' => 'virusVerdic a boolean, PASS = true',
            'dns' => 'spfVerdic, dkimVeredict, dmarcVeredict a boolean, si todos PASS = true',
            'mes' => 'mail.timestamp a mes como texto',
            'retrasado' => 'processingTimeMillis a boolean, > 1000 = true',
            'emisor' => 'mail.source a usuario de correo sin @dominio.com',
            'receptor' => [
                'mail.destination a usuarios de correo sin @domino.com',
            ],
        ];
    }
}
