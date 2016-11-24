<?php

namespace SoftEarth\Exceptions\Country;

use SoftEarth\Exceptions\InvalidDataException;

class InvalidCurrencyCodeException extends InvalidDataException
{
	/**
	 * {@inheritDoc}
	 */
	protected function setMessages($error = null, $suggest = null)
	{
		if (!$error) {
			$error = 'Invalid currency code: %s. ';
		}

		if (!$suggest) {
			$suggest = 'A valid currency code must be three characters A-z.';
		}
		
		$this->errorMsg = $error;
		$this->suggestionMsg = $suggest;
	}
}