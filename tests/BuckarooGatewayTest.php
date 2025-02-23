<?php

namespace Omnipay\Buckaroo;

use Omnipay\Tests\GatewayTestCase;

class BuckarooGatewayTest extends GatewayTestCase
{
    /**
     * @var Gateway
     */
    protected $gateway;

    public function setUp()
    {
        parent::setUp();

        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
    }

    public function testPurchase()
    {
        $request = $this->gateway->purchase(array('amount' => '10.00'));

        $this->assertInstanceOf('Omnipay\Buckaroo\Message\Request\PurchaseRequest', $request);
        $this->assertSame('10.00', $request->getAmount());
    }
}
