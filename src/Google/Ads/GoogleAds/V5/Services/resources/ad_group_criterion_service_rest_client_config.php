<?php

return [
    'interfaces' => [
        'google.ads.googleads.v5.services.AdGroupCriterionService' => [
            'GetAdGroupCriterion' => [
                'method' => 'get',
                'uriTemplate' => '/v5/{resource_name=customers/*/adGroupCriteria/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateAdGroupCriteria' => [
                'method' => 'post',
                'uriTemplate' => '/v5/customers/{customer_id=*}/adGroupCriteria:mutate',
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
