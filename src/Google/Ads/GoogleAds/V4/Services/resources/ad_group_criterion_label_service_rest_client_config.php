<?php

return [
    'interfaces' => [
        'google.ads.googleads.v4.services.AdGroupCriterionLabelService' => [
            'GetAdGroupCriterionLabel' => [
                'method' => 'get',
                'uriTemplate' => '/v4/{resource_name=customers/*/adGroupCriterionLabels/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateAdGroupCriterionLabels' => [
                'method' => 'post',
                'uriTemplate' => '/v4/customers/{customer_id=*}/adGroupCriterionLabels:mutate',
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
