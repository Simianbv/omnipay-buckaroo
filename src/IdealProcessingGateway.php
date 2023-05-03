<?php

namespace Omnipay\Buckaroo;

use Omnipay\Buckaroo\Message\Request\IdealProcessingPurchaseRequest;

/**
 * Buckaroo iDeal Processing Gateway
 */
class IdealProcessingGateway extends Gateway
{
    public function getName ()
    {
        return 'Buckaroo iDeal Processing';
    }

    public function purchase (array $parameters = [])
    {
        return $this->createRequest(IdealProcessingPurchaseRequest::class, $parameters);
    }
}
