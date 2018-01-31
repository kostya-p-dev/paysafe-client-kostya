<?php

namespace RentTrack\PaysafeClientBundle;

use Paysafe\Environment;
use Paysafe\PaysafeApiClient;

/**
 * Class PaysafeClient
 * @package RentTrack\PaysafeClientBundle
 */
class PaysafeClient
{
    /**
     * @var string
     */
    protected $paysafeApiKeyId;

    /**
     * @var string
     */
    protected $paysafeApiKeySecret;

    /**
     * @var string
     */
    protected $env;

    /**
     * @var string
     */
    protected $accountNumber;

    /**
     * PaysafeClient constructor.
     * @param $paysafeApiKeyId
     * @param $paysafeApiKeySecret
     * @param $env
     * @param $accountNumber
     */
    public function __construct(
        $paysafeApiKeyId,
        $paysafeApiKeySecret,
        $env,
        $accountNumber
    ) {
        $this->paysafeApiKeyId = $paysafeApiKeyId;
        $this->paysafeApiKeySecret = $paysafeApiKeySecret;
        $this->env == 'LIVE' ? Environment::LIVE : Environment::TEST;
        $this->accountNumber = $accountNumber;
    }

    /**
     * @return object PaysafeApiClient
     */
    public function getClient()
    {
        $client = new PaysafeApiClient(
            $this->paysafeApiKeyId,
            $this->paysafeApiKeySecret,
            $this->paysafeEnv,
            $this->accountNumber );

        return $client;
    }
}