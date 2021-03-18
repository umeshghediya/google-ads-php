<?php

return [
    'interfaces' => [
        'google.ads.googleads.v3.services.AdGroupAdLabelService' => [
            'GetAdGroupAdLabel' => [
                'method' => 'get',
                'uriTemplate' => '/v3/{resource_name=customers/*/adGroupAdLabels/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateAdGroupAdLabels' => [
                'method' => 'post',
                'uriTemplate' => '/v3/customers/{customer_id=*}/adGroupAdLabels:mutate',
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
