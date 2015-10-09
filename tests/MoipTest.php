<?php

namespace Moip\Tests;

use Moip\Tests\MoipTestCase;

/**
* class MoipTest
*/
class MoipTest extends MoipTestCase
{
	/**
	 * Test if endpoint production is valid.
	 */
	public function testShouldReceiveEndpointProductionIsValid()
	{
		$endpoint_production = 'api.moip.com.br';
		$const_endpoint_production = constant('\Moip\Moip::ENDPOINT_PRODUCTION');

		$this->assertEquals($endpoint_production, $const_endpoint_production);
	}

	/**
	 * Test if endpoint sandbox is valid.
	 */
	public function testShouldReceiveSandboxProductionIsValid()
	{
		$endpoint_sandbox = 'sandbox.moip.com.br';
		$const_endpoint_sandbox = constant('\Moip\Moip::ENDPOINT_SANDBOX');

		$this->assertEquals($endpoint_sandbox, $const_endpoint_sandbox);
	}

	/**
	 * Test if const CLIENT is valid.
	 */
	public function testShouldReceiveClientIsValid()
	{
		$client = 'Moip SDK';
		$const_client = constant('\Moip\Moip::CLIENT');

		$this->assertEquals($client, $const_client);
	}
}