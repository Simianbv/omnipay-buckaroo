<?php

namespace Omnipay\Buckaroo;

use Omnipay\Buckaroo\Message\Request\SepaDirectDebitPurchaseRequest;

/**
 * Buckaroo SEPA Direct Debit Gateway
 */
class SepaDirectDebitGateway extends Gateway
{
    public function getName ()
    {
        return 'Buckaroo SepaDirectDebit';
    }

    public function purchase (array $parameters = [])
    {
        return $this->createRequest(SepaDirectDebitPurchaseRequest::class, $parameters);
    }
}
