<?php

return [
    'interfaces' => [
        'google.ads.googleads.v3.services.KeywordPlanService' => [
            'GetKeywordPlan' => [
                'method' => 'get',
                'uriTemplate' => '/v3/{resource_name=customers/*/keywordPlans/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
            'MutateKeywordPlans' => [
                'method' => 'post',
                'uriTemplate' => '/v3/customers/{customer_id=*}/keywordPlans:mutate',
                'body' => '*',
                'placeholders' => [
                    'customer_id' => [
                        'getters' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
            'GenerateForecastMetrics' => [
                'method' => 'post',
                'uriTemplate' => '/v3/{keyword_plan=customers/*/keywordPlans/*}:generateForecastMetrics',
                'body' => '*',
                'placeholders' => [
                    'keyword_plan' => [
                        'getters' => [
                            'getKeywordPlan',
                        ],
                    ],
                ],
            ],
            'GenerateHistoricalMetrics' => [
                'method' => 'post',
                'uriTemplate' => '/v3/{keyword_plan=customers/*/keywordPlans/*}:generateHistoricalMetrics',
                'body' => '*',
                'placeholders' => [
                    'keyword_plan' => [
                        'getters' => [
                            'getKeywordPlan',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
