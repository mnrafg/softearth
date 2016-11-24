<?php

namespace SoftEarth\Country;

use SoftEarth\Exceptions\Country as CountryExceptions;
use CountryExceptions\InvalidCurrencyCodeException;

class Currency
{
	/**
	 * Three characters ISO code for the currecy.
	 *
	 * @var string
	 */
	private $code;

	/**
	 * Symbol character(s) for currency.
	 *
	 * @var string
	 */
	private $symbol;

	/**
	 * Alphabetic name of the currency.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Get the three characters ISO code of the currency.
	 *
	 * @return string Three characters ISO code of the currency.
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * Get the symbol character(s) of the currency.
	 *
	 * @return string Symbol character(s) of the currency.
	 */
	public function getSymbol()
	{
		return $this->symbol;
	}

	/**
	 * Get the alphabetic name of the currency.
	 *
	 * @return string The alphabetic name of the currency.
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set a new code for the currency.
	 *
	 * @param string $code Three characters ISO code for the currency.
	 * @return string The newly set code.
	 */
	public function setCode($code)
	{
		if (preg_match('/^[A-Z]{3}$/i', $code)) {
			return $this->code = strtoupper($code);
		}
		
		throw new InvalidCurrencyCodeException($code);
	}

	/**
	 * Set a new symbol for the currency.
	 *
	 * @param string  $symbol  Symbol character(s) of the currency.
	 * @return string The newly set symbol character(s) of the currency.
	 */
	public function setSymbol($symbol)
	{
		return $this->symbol = $symbol;
	}

	/**
	 * Set a new alphabetic name for the currency.
	 *
	 * @param  string  $name  Alphabetic name of the currency.
	 * @return string The newly set alphabetic currency name.
	 */
	public function setName($name)
	{
		return $this->name = $name;
	}

	/**
	 * Get or set three characters ISO of the currency.
	 *
	 * @param  string  $code Three characters ISO code of the currency.
	 * @return string Three characters ISO code of the currency.
	 */
	public function code($code = null)
	{
		if ($code !== null) {
			return $this->setCode($code);
		}

		return $this->getCode();
	}

	/**
	 * Get or set the currency symbol character(s).
	 *
	 * @param  string  The symbol character(s) of the currency.
	 * @return string The symbol character(s) of the currency.
	 */
	public function symbol($symbol = null)
	{
		if ($symbol !== null) {
			return $this->setSymbol($symbol);
		}

		return $this->getSymbol();
	}

	/**
	 * Get or set the alphabetic name of the currency.
	 *
	 * @param  string  The alphabetic name of the currency.
	 * @return string The alphabetic name of the currency.
	 */
	public function name($name = null)
	{
		if ($name !== null) {
			return $this->setName($name);
		}

		return $this->getName();
	}
}