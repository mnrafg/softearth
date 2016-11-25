<?php

namespace SoftEarth\Exceptions;

abstract class InvalidData extends SoftEarthException
{
	/**
	 * Error message.
	 *
	 * @var string
	 */
	protected $errorMsg;

	/**
	 * Suggestion message (how to fix the error).
	 *
	 * @var string
	 */
	protected $suggestionMsg;

	/**
	 * Create a new exception.
	 *
	 * @param  string  $invalidData  The invalid data.
	 * @param  int  $errorCode  The error code.
	 * @return void
	 */
	public function __construct($invalidData, $errorCode = 1)
	{
		$this->setMessages();
		
		$messages = $this->getMessages($invalidData);
		
		parent::__construct($messages);
	}

	/**
	 * Set the error and suggestion messages.
	 *
	 * @param  string  $error  Error message.
	 * @param  string  $suggest  Suggestion message.
	 * @return void
	 */
	abstract protected function setMessages($error = null, $suggest = null);

	/**
	 * Get the concatenated error and suggestion messages.
	 *
	 * @param mixed $value The value caused the error.
	 * @return string The concatenated error and suggestion messages.
	 */
	protected function getMessages($value = null)
	{
		return
			sprintf($this->errorMsg, (string) $value).
			$this->suggestionMsg;
	}
}