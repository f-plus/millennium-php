<?php

namespace FPlus\Millennium\Soap\Message;

class SaveClient
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var ClientCard
     */
    protected $clientCard;

    /**
     * @var string
     */
    protected $language;

    /**
     * @param Client     $client
     * @param ClientCard $clientCard
     * @param string     $language
     */
    public function __construct($client, $clientCard, $language)
    {
        $this->client = $client;
        $this->clientCard = $clientCard;
        $this->language = $language;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param Client $client
     *
     * @return SaveClient
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * @return ClientCard
     */
    public function getClientCard()
    {
        return $this->clientCard;
    }

    /**
     * @param ClientCard $clientCard
     *
     * @return SaveClient
     */
    public function setClientCard($clientCard)
    {
        $this->clientCard = $clientCard;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return SaveClient
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }
}
