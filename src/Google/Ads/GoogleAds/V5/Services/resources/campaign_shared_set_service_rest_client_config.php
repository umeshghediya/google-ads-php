<?php

return [
    'interfaces' => [
        'google.ads.googleads.v5.services.CampaignSharedSetService' => [
            'GetCampaignSharedSet' => [
                'method' => 'get',
                'uriTemplate' => '/v5/{resource_name=customers/*/campaignSharedSets/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateCampaignSharedSets' => [
                'method' => 'post',
                'uriTemplate' => '/v5/customers/{customer_id=*}/campaignSharedSets:mutate',
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
