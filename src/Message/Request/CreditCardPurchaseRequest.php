<?php

namespace Omnipay\Buckaroo\Message\Request;

/**
 * Buckaroo Credit Card Purchase Request
 */
class CreditCardPurchaseRequest extends AbstractRequest
{
    public function getData ()
    {
        $data = parent::getData();

        $creditcardProviders = ['visa', 'mastercard', 'amex'];

        if (in_array($this->getPaymentMethod(), $creditcardProviders)) {
            $data['Brq_payment_method'] = $this->getPaymentMethod();
        } else {
            $data['Brq_requestedservices'] = implode(",", $creditcardProviders);
        }

        return $data;
    }
}
