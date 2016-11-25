<?php

namespace SoftEarth\Exceptions\Country;

use SoftEarth\Exceptions\InvalidData;

class InvalidCountryCode extends InvalidData
{
	/**
	 * {@inheritDoc}
	 */
	protected function setMessages($error = null, $suggest = null)
	{
		if (!$error) {
			$error = 'Invalid country code: %s. ';
		}

		if (!$suggest) {
			$suggest = 'A valid country code must be two or three characters A-z.';
		}
		
		$this->errorMsg = $error;
		$this->suggestionMsg = $suggest;
	}
}