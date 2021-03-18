<?php

return [
    'interfaces' => [
        'google.ads.googleads.v6.services.AgeRangeViewService' => [
            'GetAgeRangeView' => [
                'method' => 'get',
                'uriTemplate' => '/v6/{resource_name=customers/*/ageRangeViews/*}',
                'placeholders' => [
                    'resource_name' => [
                        'getters' => [
                            'getResourceName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
