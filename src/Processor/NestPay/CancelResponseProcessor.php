<?php
namespace Paranoia\Processor\NestPay;

class CancelResponseProcessor extends BaseResponseProcessor
{
    public function process($rawResponse)
    {
        return $this->processCommonResponse($rawResponse);
    }
}
