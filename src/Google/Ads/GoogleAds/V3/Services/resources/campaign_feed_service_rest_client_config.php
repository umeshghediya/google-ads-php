<?php

return [
    'interfaces' => [
        'google.ads.googleads.v3.services.CampaignFeedService' => [
            'GetCampaignFeed' => [
                'method' => 'get',
                'uriTemplate' => '/v3/{resource_name=customers/*/campaignFeeds/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateCampaignFeeds' => [
                'method' => 'post',
                'uriTemplate' => '/v3/customers/{customer_id=*}/campaignFeeds:mutate',
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
