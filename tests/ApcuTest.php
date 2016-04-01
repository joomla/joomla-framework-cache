<?php
/**
 * @copyright  Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace Joomla\Cache\Tests;

use Joomla\Cache;

/**
 * Tests for the Joomla\Cache\Apcu class.
 */
class ApcuTest extends CacheTest
{
	/**
	 * Sets up the fixture, for example, open a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		parent::setUp();

		if (!Cache\Apcu::isSupported())
		{
			$this->markTestSkipped('APCu Cache Handler is not supported on this system.');
		}

		$this->instance = new Cache\Apcu($this->cacheOptions);
	}

	/**
	 * Tests the Joomla\Cache\Cache::getItem and Joomla\Cache\Cache::save methods with timeout
	 */
	public function testGetAndSaveWithTimeout()
	{
		$this->markTestSkipped('The APC cache TTL is not working in a single process/request. See https://bugs.php.net/bug.php?id=58084');
	}
}
