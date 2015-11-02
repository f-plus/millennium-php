<?php

namespace FPlus\Millennium\Soap\Message;

class RetrievePassword
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $language;

    /**
     * @param string $email
     * @param string $language
     */
    public function __construct($email, $language)
    {
        $this->email = $email;
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return RetrievePassword
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * @return RetrievePassword
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }
}
