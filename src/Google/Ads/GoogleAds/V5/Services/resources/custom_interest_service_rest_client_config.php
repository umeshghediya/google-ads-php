<?php

return [
    'interfaces' => [
        'google.ads.googleads.v5.services.CustomInterestService' => [
            'GetCustomInterest' => [
                'method' => 'get',
                'uriTemplate' => '/v5/{resource_name=customers/*/customInterests/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateCustomInterests' => [
                'method' => 'post',
                'uriTemplate' => '/v5/customers/{customer_id=*}/customInterests:mutate',
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
