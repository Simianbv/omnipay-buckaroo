<?php

namespace Omnipay\Buckaroo\Message\Request;

/**
 * Buckaroo PayPal Purchase Request
 */
class PayPalPurchaseRequest extends AbstractRequest
{
    public function getData ()
    {
        $data = parent::getData();
        $data['Brq_payment_method'] = 'paypal';

        return $data;
    }
}
