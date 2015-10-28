<?php

namespace FPlus\Millennium\Soap\Message;

class SaveGC
{
    /**
     * @var ArrayOfGCClient
     */
    protected $gcList = null;

    /**
     * @var ClientCard
     */
    protected $cc = null;

    /**
     * @var bool
     */
    protected $storeClientCard = null;

    /**
     * @var string
     */
    protected $language = null;

    /**
     * @param ArrayOfGCClient $gcList
     * @param ClientCard      $cc
     * @param bool            $storeClientCard
     * @param string          $language
     */
    public function __construct($gcList, $cc, $storeClientCard, $language)
    {
        $this->gcList = $gcList;
        $this->cc = $cc;
        $this->storeClientCard = $storeClientCard;
        $this->language = $language;
    }

    /**
     * @return ArrayOfGCClient
     */
    public function getGcList()
    {
        return $this->gcList;
    }

    /**
     * @param ArrayOfGCClient $gcList
     *
     * @return \Millennium\Soap\SaveGC
     */
    public function setGcList($gcList)
    {
        $this->gcList = $gcList;

        return $this;
    }

    /**
     * @return ClientCard
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param ClientCard $cc
     *
     * @return \Millennium\Soap\SaveGC
     */
    public function setCc($cc)
    {
        $this->cc = $cc;

        return $this;
    }

    /**
     * @return bool
     */
    public function getStoreClientCard()
    {
        return $this->storeClientCard;
    }

    /**
     * @param bool $storeClientCard
     *
     * @return \Millennium\Soap\SaveGC
     */
    public function setStoreClientCard($storeClientCard)
    {
        $this->storeClientCard = $storeClientCard;

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
     * @return \Millennium\Soap\SaveGC
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }
}
