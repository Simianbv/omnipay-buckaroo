<?php

namespace Omnipay\Buckaroo\Message\Request;

/**
 * Buckaroo SEPA Direct Debit Purchase Request
 */
class SepaDirectDebitPurchaseRequest extends AbstractRequest
{
    public function getData ()
    {
        $data = parent::getData();
        $data['Brq_payment_method'] = 'sepadirectdebit';

        return $data;
    }
}
