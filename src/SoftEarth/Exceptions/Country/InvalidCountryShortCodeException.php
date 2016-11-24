<?php

namespace SoftEarth\Exceptions\Country;

class InvalidCountryShortCodeException extends InvalidCountryCodeException
{
	/**
	 * {@inheritDoc}
	 */
	protected function setMessages($error = null, $suggest = null)
	{
		if (!$error) {
			$error = 'Invalid short code: %s. ';
		}

		if (!$suggest) {
			$suggest = 'A valid short code must be two characters A-z.';
		}
		
		$this->errorMsg = $error;
		$this->suggestionMsg = $suggest;
	}
}