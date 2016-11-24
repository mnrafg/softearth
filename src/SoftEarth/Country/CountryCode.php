<?php

namespace SoftEarth\Country;

use SoftEarth\Exceptions\Country as CountryExceptions;
use CountryExceptions\InvalidCountryShortCodeException;
use CountryExceptions\InvalidCountryLongCodeException;

class CountryCode
{
	/**
	 * Short two characters ISO code for the country.
	 *
	 * @var string
	 */
	private $short;

	/**
	 * Long three characters ISO code for the country.
	 *
	 * @var string
	 */
	private $long;

	/**
	 * Get short two characters ISO code.
	 *
	 * @return string Short two characters ISO code for the country.
	 */
	public function getShort()
	{
		return $this->short;
	}

	/**
	 * Get long three characters ISO code.
	 *
	 * @return string Long three characters ISO code for the country.
	 */
	public function getLong()
	{
		return $this->long;
	}

	/**
	 * Set a new short code.
	 *
	 * @param  string  $code  Two characters short ISO code for the country.
	 * @return string
	 */
	public function setShort($code)
	{
		if (preg_match('/^[A-Z]{2}$/i', $code);) {
			return $this->short = strtoupper($code);
		}
		
		throw new InvalidCountryShortCodeException($code);
	}

	/**
	 * Set a new long code.
	 *
	 * @param  string  $code  Three characters long ISO code for the country.
	 * @return string
	 */
	public function setLong($code)
	{
		if (preg_match('/^[A-Z]{3}$/i', $code);) {
			return $this->long = strtoupper($code);
		}
		
		throw new InvalidCountryLongCodeException($code);
	}

	/**
	 * Get or set short two characters ISO code for the country.
	 *
	 * @param  string  $code Two characters short ISO code for the country.
	 * @return string Short two characters ISO code for the country.
	 */
	public function short($code = null)
	{
		if ($code !== null) {
			return $this->setShort($code);
		}

		return $this->getShort();
	}

	/**
	 * Get or set long three characters ISO code for the country.
	 *
	 * @param  string  $code Three characters long ISO code for the country.
	 * @return string Long three characters ISO code for the country.
	 */
	public function long($code = null)
	{
		if ($code !== null) {
			return $this->setLong($code);
		}

		return $this->getLong();
	}
}