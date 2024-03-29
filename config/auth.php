<?php

return [

	'defaults' => [
		'guard' => 'user',
		'passwords' => 'users',
	],

	'guards' => [
		'web' => [
			'driver' => 'session',
			'provider' => 'users',
		],

		'api' => [
			'driver' => 'token',
			'provider' => 'users',
		],
		'admin' => [
			'driver' => 'session',
			'provider' => 'admins',
		],
		'user' => [
			'driver' => 'session',
			'provider' => 'users',
		],
	],


	'providers' => [
		'users' => [
			'driver' => 'eloquent',
			'model' => App\User::class,
		],
		'admins' => [
			'driver' => 'eloquent',
			'model' => App\Admin::class,
		],

	],


	'passwords' => [
		'users' => [
			'provider' => 'users',
			'table' => 'password_resets',
			'expire' => 60,
		],
		'admins' => [
			'provider' => 'admins',
			'table' => 'password_resets',
			'expire' => 60,
		],
	],

];
