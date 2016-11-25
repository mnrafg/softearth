<?php

namespace SoftEarth\Country;

use SoftEarth\Exceptions\Country as CountryExceptions;
use CountryExceptions\InvalidLatitude;
use CountryExceptions\InvalidLongitude;

class Geo
{
	/**
	 * The latitude value.
	 *
	 * @var float
	 */
	private $latitude;

	/**
	 * The longitude value.
	 *
	 * @var float
	 */
	private $longitude;

	/**
	 * Get the latitude value.
	 *
	 * @return float Latitude value.
	 */
	public function getLatitude()
	{
		return $this->latitude;
	}

	/**
	 * Get the longitude value.
	 *
	 * @return float Longitude value.
	 */
	public function getLongitude()
	{
		return $this->longitude;
	}

	/**
	 * Set the latitude value.
	 *
	 * @return float Latitude value.
	 */
	public function setLatitude($latitude)
	{
		if ($latitude >= -90 && $latitude <= 90) {
			return $this->latitude = $latitude;
		}

		throw new InvalidLatitude($latitude);
	}

	/**
	 * Set the longitude value.
	 *
	 * @return float Longitude value.
	 */
	public function setLongitude($longitude)
	{
		if ($longitude >= -180 && $longitude <= 180) {
			return $this->longitude = $longitude;
		}

		throw new InvalidLongitude($longitude);
	}

	/**
	 * Get or set the latitude value.
	 *
	 * @param  float  $latitude  The latitude value.
	 * @return float Latitude value.
	 */
	public function latitude($latitude = null)
	{
		if ($latitude !== null) {
			return $this->setLatitude($latitude);
		}

		return $this->getLatitude();
	}

	/**
	 * Get or set the longitude value.
	 *
	 * @param  float  $longitude The longitude value.
	 * @return float Longitude value.
	 */
	public function longitude($longitude = null)
	{
		if ($longitude !== null) {
			return $this->setLongitude($longitude);
		}

		return $this->getLongitude();
	}
}