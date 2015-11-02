<?php

namespace FPlus\Millennium\Tests\Functional;

use FPlus\Millennium\Client;

/**
 * @group functional
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    private $client;
    private $username;
    private $password;

    public function setUp()
    {
        $this->client = new Client(getenv('MILLENNIUM_URL'));
        $this->username = getenv('MILLENNIUM_USERNAME');
        $this->password = getenv('MILLENNIUM_PASSWORD');
    }

    public function testGetSalonInfo()
    {
        $info = $this->client->getSalonInfo();

        $this->assertNotEmpty($info->getCompanyName());
    }

    public function testAuthenticateWithInvalidPassword()
    {
        $this->assertNull($this->client->authenticate($this->username, 'invalidpasswordforsure'));
    }

    public function testAuthenticate()
    {
        $session = $this->client->authenticate($this->username, $this->password);

        $this->assertNotNull($session);
        $this->assertGreaterThan(0, $session->getClientId());
    }

    public function testInvalidateSession()
    {
        $previousId = $this->client->getSession()->getId();

        $this->client->invalidateSession();

        $this->assertNotEquals($previousId, $this->client->getSession()->getId());
    }

    /**
     * @depends testAuthenticate
     */
    public function testInvalidateSessionWithAuthenticatedUser()
    {
        $this->authenticateClient();
        $previousId = $this->client->getSession()->getId();

        $this->client->invalidateSession();

        $this->assertNotEquals($previousId, $this->client->getSession()->getId());
    }

    private function authenticateClient()
    {
        $session = $this->client->authenticate($this->username, $this->password);
        $this->client->setSession($session);
    }
}
