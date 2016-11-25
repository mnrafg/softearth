<?php

use SoftEarth\Country\Country;
use PHPUnit\Framework\TestCase;

class CountryTest extends TestCase
{
	/**
	 * Test the getName method of the Country.
	 *
	 * @return void
	 */
	public function testCorrectCountryNameCanBeRetrieved()
	{
		// Instanciate country
		$af = new Country('Afghanistan');

		// Assert
		$this->assertEquals('Afghanistan', $af->getName());
	}
}