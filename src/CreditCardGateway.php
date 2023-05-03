<?php

namespace Omnipay\Buckaroo;

use Omnipay\Buckaroo\Message\Request\CreditCardPurchaseRequest;
use Omnipay\Common\AbstractGateway;

/**
 * Buckaroo Credit Card Gateway
 */
class CreditCardGateway extends Gateway
{
    public function getName ()
    {
        return 'Buckaroo Credit Card';
    }

    public function getPaymentMethod ($value)
    {
        return $this->setParameter('paymentMethod', $value);
    }

    public function setPaymentMethod ()
    {
        return $this->getParameter('paymentMethod');
    }

    public function purchase (array $parameters = [])
    {
        return $this->createRequest(CreditCardPurchaseRequest::class, $parameters);
    }
}
