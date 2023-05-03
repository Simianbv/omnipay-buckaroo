<?php

namespace Omnipay\Buckaroo;

use Omnipay\Buckaroo\Message\Request\PayPalPurchaseRequest;

/**
 * Buckaroo PayPal Gateway
 */
class PayPalGateway extends Gateway
{
    public function getName ()
    {
        return 'Buckaroo PayPal';
    }

    public function purchase (array $parameters = [])
    {
        return $this->createRequest(PayPalPurchaseRequest::class, $parameters);
    }
}
