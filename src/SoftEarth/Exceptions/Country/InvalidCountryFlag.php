<?php

namespace SoftEarth\Exceptions\Country;

use SoftEarth\Exceptions\InvalidFile;

class InvalidCountryFlag extends InvalidFile
{
	/**
	 * {@inheritDoc}
	 */
	protected function setMessage($error = null)
	{
		if (!$error) {
			$error = 'Invalid country flag: %s. ';
		}
		
		$this->errorMsg = $error;
	}
}