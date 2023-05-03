<?php

namespace Omnipay\Buckaroo;

use Omnipay\Buckaroo\Message\Request\BancontactMrCashPurchaseRequest;

/**
 * Buckaroo Bancontact Mr Cash Gateway
 */
class BancontactMrCashGateway extends CreditCardGateway
{
    public function getName ()
    {
        return 'Buckaroo Bancontact MrCash';
    }

    public function purchase (array $parameters = [])
    {
        return $this->createRequest(BancontactMrCashPurchaseRequest::class, $parameters);
    }
}
