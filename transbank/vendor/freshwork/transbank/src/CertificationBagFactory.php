<?php
namespace Freshwork\Transbank;

/**
 * Class CertificationBagFactory
 * @package Freshwork\Transbank
 */
class CertificationBagFactory
{
    /**
     * @return CertificationBag
     */
    public static function integrationOneClick()
    {
        $private_key = dirname(__FILE__) . '/certs/webpay-oneclick-integration/34119694.key';
        $client_certificate = dirname(__FILE__) . '/certs/webpay-oneclick-integration/34119694.crt';

        return new CertificationBag($private_key, $client_certificate, null, CertificationBag::INTEGRATION);
    }

    /**
     * @return CertificationBag
     */
    public static function integrationWebpayNormal()
    {
        $private_key = dirname(__FILE__) . '/certs/webpay-plus-integration/34119694.key';
        $client_certificate = dirname(__FILE__) . '/certs/webpay-plus-integration/34119694.crt';

        return new CertificationBag($private_key, $client_certificate, null, CertificationBag::INTEGRATION);
    }

    /**
     * @return CertificationBag
     */
    public static function integrationPatPass()
    {
        $private_key = dirname(__FILE__) . '/certs/webpay-patpass-integration/34119694.key';
        $client_certificate = dirname(__FILE__) . '/certs/webpay-patpass-integration/34119694.crt';

        return new CertificationBag($private_key, $client_certificate, null, CertificationBag::INTEGRATION);
    }

    /**
     * CertificationBag constructor.
     * @param string $client_private_key Client private key
     * @param string $client_certificate Client public certificate
     * @param null|string $server_certificate Transbank's server public certificate
     *
     * @return CertificationBag
     */
    public static function production($client_private_key, $client_certificate, $server_certificate = null)
    {
        $env = CertificationBag::PRODUCTION;
        return new CertificationBag($client_private_key, $client_certificate, $server_certificate, $env);
    }

    /**
     * @param $client_private_key
     * @param $client_certificate
     * @param null $server_certificate
     * @param int $environment
     * @return CertificationBag
     */
    public static function create($client_private_key, $client_certificate, $server_certificate = null, $environment = CertificationBag::INTEGRATION)
    {
        return new CertificationBag($client_private_key, $client_certificate, $server_certificate, $environment);
    }
}
