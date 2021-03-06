<?php

namespace SoftEarth\Exceptions\Country;

class InvalidCountryLongCode extends InvalidCountryCode
{
	/**
	 * {@inheritDoc}
	 */
	protected function setMessages($error = null, $suggest = null)
	{
		if (!$error) {
			$error = 'Invalid long code: %s. ';
		}

		if (!$suggest) {
			$suggest = 'A valid long code must be three characters A-z.';
		}
		
		$this->errorMsg = $error;
		$this->suggestionMsg = $suggest;
	}
}