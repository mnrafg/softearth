<?php

namespace SoftEarth\Country;

class Country
{
	/**
	 * ID of the country.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * ISD code of the country.
	 *
	 * @var int
	 */
	private $isd;

	/**
	 * The country geo data.
	 *
	 * @var \SoftEarth\Geo
	 */
	private $geo;

	/**
	 * ISO codes for the country.
	 *
	 * @var \SoftEarth\CountryCode
	 */
	private $code;

	/**
	 * The country name.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * The country flag.
	 *
	 * @var \SoftEarth\Flag
	 */
	private $flag;

	/**
	 * The country captial.
	 *
	 * @var \SoftEarth\Capital
	 */
	private $capital;

	/**
	 * The country currency.
	 *
	 * @var \SoftEarth\Currency
	 */
	private $currency;

	/**
	 * The country timezone.
	 *
	 * @var string \DateTimeZone
	 */
	private $timeZone;

	/**
	 * Create a new country.
	 *
	 * @param  string  $name  The country name.
	 * @return void
	 */
	public function __construct($name)
	{
		$this->name = $name;
	}

	/**
	 * Get the country name.
	 *
	 * @return string The country name.
	 */
	public function getName()
	{
		return $this->name;
	}
}