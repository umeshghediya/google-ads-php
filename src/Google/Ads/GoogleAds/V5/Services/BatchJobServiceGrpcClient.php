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
 * Proto file describing the BatchJobService.
 *
 * Service to manage batch jobs.
 */
class BatchJobServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Mutates a batch job.
     * @param \Google\Ads\GoogleAds\V5\Services\MutateBatchJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Ads\GoogleAds\V5\Services\MutateBatchJobResponse
     */
    public function MutateBatchJob(\Google\Ads\GoogleAds\V5\Services\MutateBatchJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v5.services.BatchJobService/MutateBatchJob',
        $argument,
        ['\Google\Ads\GoogleAds\V5\Services\MutateBatchJobResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the batch job.
     * @param \Google\Ads\GoogleAds\V5\Services\GetBatchJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Ads\GoogleAds\V5\Resources\BatchJob
     */
    public function GetBatchJob(\Google\Ads\GoogleAds\V5\Services\GetBatchJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v5.services.BatchJobService/GetBatchJob',
        $argument,
        ['\Google\Ads\GoogleAds\V5\Resources\BatchJob', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the results of the batch job. The job must be done.
     * Supports standard list paging.
     * @param \Google\Ads\GoogleAds\V5\Services\ListBatchJobResultsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Ads\GoogleAds\V5\Services\ListBatchJobResultsResponse
     */
    public function ListBatchJobResults(\Google\Ads\GoogleAds\V5\Services\ListBatchJobResultsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v5.services.BatchJobService/ListBatchJobResults',
        $argument,
        ['\Google\Ads\GoogleAds\V5\Services\ListBatchJobResultsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Runs the batch job.
     *
     * The Operation.metadata field type is BatchJobMetadata. When finished, the
     * long running operation will not contain errors or a response. Instead, use
     * ListBatchJobResults to get the results of the job.
     * @param \Google\Ads\GoogleAds\V5\Services\RunBatchJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\LongRunning\Operation
     */
    public function RunBatchJob(\Google\Ads\GoogleAds\V5\Services\RunBatchJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v5.services.BatchJobService/RunBatchJob',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Add operations to the batch job.
     * @param \Google\Ads\GoogleAds\V5\Services\AddBatchJobOperationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Google\Ads\GoogleAds\V5\Services\AddBatchJobOperationsResponse
     */
    public function AddBatchJobOperations(\Google\Ads\GoogleAds\V5\Services\AddBatchJobOperationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v5.services.BatchJobService/AddBatchJobOperations',
        $argument,
        ['\Google\Ads\GoogleAds\V5\Services\AddBatchJobOperationsResponse', 'decode'],
        $metadata, $options);
    }

}
