<?php

namespace SoftEarth\Country;

use SoftEarth\Exception\Country as CountryExceptions;
use CountryExceptions\InvalidCountryFlagFile;

class Flag
{
	/**
	 * CSS class for the flag.
	 *
	 * @var string
	 */
	$class;

	/**
	 * CSS background position of the flag.
	 *
	 * @var string
	 */
	$position = '0px 0px';

	/**
	 * Validation rules.
	 *
	 * @var string
	 */
	$rules = [
		'minHeight' => 0,
		'maxHeight' => 0,
		'minWidth' => 0,
		'maxWidth' => 0,
		'minSize' => 0,
		'maxSize' => 0,
		'type' => [
			'image/png',
			'image/jpeg',
			'image/gif',
			'image/svg+xml',
			'image/bmp',
		],
	];

	/**
	 * Flag base64 encoded image data (file).
	 *
	 * @var string
	 */
	$image;

	/**
	 * Flag file metadata.
	 *
	 * @var array
	 */
	$meta = [
		'height' => 0,
		'width' => 0,
		'mimetype' => '',
		'size' => 0
	];

	public function getClass()
	{
		return $this->class;
	}

	public function getPosition()
	{
		return $this->position;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function getMeta($key)
	{
		if (isset($this->meta[$key])) {
			return $this->meta[$key];
		}

		return null;
	}

	public function setClass($class)
	{
		return $this->class = $class;
	}

	public function setPosition($position)
	{
		$this->position = $position;
	}

	public function setImage($image)
	{
		$this->validateImage($image);
	}

	private function validateImage($image)
	{
		if (!is_readable($image)) {
			throw new InvalidCountryFlagFile($image);
		}
	}
}