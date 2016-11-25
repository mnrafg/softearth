<?php

namespace SoftEarth\Exceptions;

abstract class InvalidFile extends SoftEarthException
{
	/**
	 * Error message.
	 *
	 * @var string
	 */
	protected $errorMsg;

	/**
	 * Create a new exception.
	 *
	 * @param  string  $invalidFile  The invalid filename.
	 * @param  int  $errorCode  The error code.
	 * @return void
	 */
	public function __construct($invalidFile, $errorCode = 1)
	{
		$this->setMessage();
		
		$message = $this->getMessage($invalidFile);
		
		parent::__construct($message);
	}

	/**
	 * Set the error message.
	 *
	 * @param  string  $error  Error message.
	 * @return void
	 */
	abstract protected function setMessage($error = null);

	/**
	 * Get the formatted error message.
	 *
	 * @param mixed $value The value caused the error.
	 * @return string The formatted error message.
	 */
	protected function getMessage($value = null)
	{
		return sprintf($this->errorMsg, (string) $value);
	}
}