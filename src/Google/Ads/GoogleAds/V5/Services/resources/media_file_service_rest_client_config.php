<?php

return [
    'interfaces' => [
        'google.ads.googleads.v5.services.MediaFileService' => [
            'GetMediaFile' => [
                'method' => 'get',
                'uriTemplate' => '/v5/{resource_name=customers/*/mediaFiles/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateMediaFiles' => [
                'method' => 'post',
                'uriTemplate' => '/v5/customers/{customer_id=*}/mediaFiles:mutate',
                'body' => '*',
                'placeholders' => [
                    'customer_id' => [
                        'getters' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
