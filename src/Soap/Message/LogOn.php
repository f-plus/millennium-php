<?php

namespace FPlus\Millennium\Soap\Message;

class LogOn
{
    /**
     * @var string
     */
    protected $user = null;

    /**
     * @var string
     */
    protected $password = null;

    /**
     * @param string $user
     * @param string $password
     */
    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return \Millennium\Soap\LogOn
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return \Millennium\Soap\LogOn
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
