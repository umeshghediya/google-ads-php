<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2020 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Ads\GoogleAds\V5\Services;

/**
 * Proto file describing the keyword plan campaign keyword service.
 *
 * Service to manage Keyword Plan campaign keywords. KeywordPlanCampaign is
 * required to add the campaign keywords. Only negative keywords are supported.
 * A maximum of 1000 negative keywords are allowed per plan. This includes both
 * campaign negative keywords and ad group negative keywords.
 */
class KeywordPlanCampaignKeywordServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the requested plan in full detail.
     * @param \Google\Ads\GoogleAds\V5\Services\GetKeywordPlanCampaignKeywordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Ads\GoogleAds\V5\Resources\KeywordPlanCampaignKeyword
     */
    public function GetKeywordPlanCampaignKeyword(\Google\Ads\GoogleAds\V5\Services\GetKeywordPlanCampaignKeywordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v5.services.KeywordPlanCampaignKeywordService/GetKeywordPlanCampaignKeyword',
        $argument,
        ['\Google\Ads\GoogleAds\V5\Resources\KeywordPlanCampaignKeyword', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates, updates, or removes Keyword Plan campaign keywords. Operation
     * statuses are returned.
     * @param \Google\Ads\GoogleAds\V5\Services\MutateKeywordPlanCampaignKeywordsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Ads\GoogleAds\V5\Services\MutateKeywordPlanCampaignKeywordsResponse
     */
    public function MutateKeywordPlanCampaignKeywords(\Google\Ads\GoogleAds\V5\Services\MutateKeywordPlanCampaignKeywordsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v5.services.KeywordPlanCampaignKeywordService/MutateKeywordPlanCampaignKeywords',
        $argument,
        ['\Google\Ads\GoogleAds\V5\Services\MutateKeywordPlanCampaignKeywordsResponse', 'decode'],
        $metadata, $options);
    }

}
