<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Iam\V1;

/**
 */
class FeedbackSrvClient extends \Xhtkyy\HyperfTools\GrpcClient\BaseGrpcClient {

    /**
     * CreateFeedBack 意见反馈
     * @param \Iam\V1\FeedbackSchema $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return array
     */
    public function CreateFeedback(\Iam\V1\FeedbackSchema $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/iam.v1.FeedbackSrv/CreateFeedback',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
