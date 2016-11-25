<?php

namespace SoftEarth\Exceptions\Country;

class InvalidCountryFlagFile extends InvalidCountryFlag
{
	/**
	 * {@inheritDoc}
	 */
	protected function setMessage($error = null)
	{
		if (!$error) {
			$error = 'The file %s either does not exists or is unreadable. ';
		}
		
		$this->errorMsg = $error;
	}
}