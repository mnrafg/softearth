<?php

namespace SoftEarth\Exceptions\Country;

class InvalidLongitudeException extends InvalidGeoDataException
{
	/**
	 * {@inheritDoc}
	 */
	protected function setMessages($error = null, $suggest = null)
	{
		if (!$error) {
			$error = 'Invalid longitude value: %s. ';
		}

		if (!$suggest) {
			$suggest = 'A valid longitude value must be greater than or equal to -180 and less than or equal to 180.';
		}
		
		$this->errorMsg = $error;
		$this->suggestionMsg = $suggest;
	}
}