<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Image Driver
	|--------------------------------------------------------------------------
	|
	| Intervention Image supports "GD Library" and "Imagick" to process images
	| internally. You may choose one of them according to your PHP
	| configuration. By default PHP's "GD Library" implementation is used.
	|
	| Supported: "gd", "imagick"
	|
	*/

	'driver' => 'gd',

	'size' => [
		'employee'   => [ 400, 300 ],
		'department' => [ 370, 250 ]
	]

);
