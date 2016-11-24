<?php

use App\Country;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

// Include composer autoloader
require 'vendor/autoload.php';

var_dump(new Country());

exit(0);

// Guzzle HTTP client
$http = new Client();

// Request the data from countrycode.org
$body = $http->get('https://countrycode.org/');

// Construct the DOM
$dom = new Crawler((string) $body->getBody());

// Filter the DOM for countries table
$table = $dom->filter('.visible-md > table > tbody');

// Countries list
$countries = [];

// Loop through all the rows
$countries = $dom->filter('tr')->each(function (Crawler $node, $i) {
	global $http;

	$tds = $node->filter('td');
	$url = 'https://countrycode.org';
	
	if ($tds->count() !== 3) {
		return null;
	}

	// $body = $http->get($url.$tds->filter('a')->attr('href'));
	// $dom = new Crawler((string) $body->getBody());
	
	$codes = explode(' / ', $tds->eq(2)->text());
	$country = json_decode('{
		"id": '. ($i - 241) .',
		"isd": "'. $tds->eq(1)->text() .'",
		"codes": {"short": "'. $codes[0] .'", "long": "'. $codes[1] .'"},
		"name": "'. $tds->eq(0)->text() .'"
	}');
	
	return [
		'id' => $country->id,
		'code' => [
			'short' => $country->codes->short,
			'long' => $country->codes->long
		],
		'isd' => $country->isd,
		'currency' => [
			'code' => '',
			'symbol' => '',
			'en_name' => '',
			'ps_name' => ''
		],
		'en_name' => $country->name,
		'ps_name' => '',
		'flag' => [
			'class' => 'flag-'.strtolower($country->codes->short),
			'position' => '0px 0px',
			'data' => '',
			'height' => 0,
			'mime_type' => '',
			'size' => 0,
			'width' => 0
		],
		'timezone' => [
			'gmt' => '',
			'name' => ''
		],
		'geo' => [
			'lat' => '',
			'long' => ''
		],
		'capital' => ''
	];
});

$countries = collect($countries)->reject(function ($value, $key) {
	return $value;
});

// echo json_encode($countries);
var_dump(count($countries));