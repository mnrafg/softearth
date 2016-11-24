<?php

namespace SoftEarth\Exceptions\Country;

use SoftEarth\Exceptions\InvalidDataException;

class InvalidGeoDataException extends InvalidDataException
{
	/**
	 * {@inheritDoc}
	 */
	protected function setMessages($error = null, $suggest = null)
	{
		if (!$error) {
			$error = 'Invalid geo data: %s. ';
		}

		if (!$suggest) {
			$suggest = 'Please enter a valid geo data.';
		}
		
		$this->errorMsg = $error;
		$this->suggestionMsg = $suggest;
	}
}