<?php

namespace FPlus\Millennium\Soap\Message;

class RetrivePassword
{
    /**
     * @var string
     */
    protected $email = null;

    /**
     * @var string
     */
    protected $language = null;

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
     * @return \Millennium\Soap\RetrivePassword
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
     * @return \Millennium\Soap\RetrivePassword
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }
}
