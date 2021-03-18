<?php

return [
    'interfaces' => [
        'google.ads.googleads.v6.services.RemarketingActionService' => [
            'GetRemarketingAction' => [
                'method' => 'get',
                'uriTemplate' => '/v6/{resource_name=customers/*/remarketingActions/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateRemarketingActions' => [
                'method' => 'post',
                'uriTemplate' => '/v6/customers/{customer_id=*}/remarketingActions:mutate',
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
