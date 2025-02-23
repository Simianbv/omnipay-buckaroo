<?php

namespace Omnipay\Buckaroo;

use Omnipay\Buckaroo\Message\Request\CompletePurchaseRequest;
use Omnipay\Buckaroo\Message\Request\PurchaseRequest;
use Omnipay\Common\AbstractGateway;

/**
 * Buckaroo Credit Card Gateway
 * @method getParameter(string $string)
 * @method setParameter(string $string, $value)
 * @method createRequest(string $string, array $parameters)
 */
class Gateway extends AbstractGateway
{
    public function getName ()
    {
        return 'Buckaroo Gateway';
    }

    public function getDefaultParameters ()
    {
        return [
            'websiteKey' => '',
            'secretKey'  => '',
            'testMode'   => false,
        ];
    }

    public function getWebsiteKey ()
    {
        return $this->getParameter('websiteKey');
    }

    public function setWebsiteKey ($value)
    {
        return $this->setParameter('websiteKey', $value);
    }

    public function getSecretKey ()
    {
        return $this->getParameter('secretKey');
    }

    public function setSecretKey ($value)
    {
        return $this->setParameter('secretKey', $value);
    }

    public function purchase (array $parameters = [])
    {
        return $this->createRequest(PurchaseRequest::class, $parameters);
    }

    public function completePurchase (array $parameters = [])
    {
        return $this->createRequest(CompletePurchaseRequest::class, $parameters);
    }
}
