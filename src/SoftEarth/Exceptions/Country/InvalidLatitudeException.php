<?php

namespace SoftEarth\Exceptions\Country;

class InvalidLatitudeException extends InvalidGeoDataException
{
	/**
	 * {@inheritDoc}
	 */
	protected function setMessages($error = null, $suggest = null)
	{
		if (!$error) {
			$error = 'Invalid latitude value: %s. ';
		}

		if (!$suggest) {
			$suggest = 'A valid latitude value must be greater than or equal to -90 and less than or equal to 90.';
		}
		
		$this->errorMsg = $error;
		$this->suggestionMsg = $suggest;
	}
}