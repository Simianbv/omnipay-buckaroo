<?php

namespace Omnipay\Buckaroo;

use Omnipay\Buckaroo\Message\Request\IdealPurchaseRequest;

/**
 * Buckaroo iDeal Gateway
 */
class IdealGateway extends Gateway
{
    public function getName ()
    {
        return 'Buckaroo iDeal';
    }

    public function purchase (array $parameters = [])
    {
        return $this->createRequest(IdealPurchaseRequest::class, $parameters);
    }
}
