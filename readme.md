
## About Project

This application is build using Laravel 5.6. It enables users to submit orders through the REST API and get the estimated time of arrival. 



## Installation

- composer install
- edit .env set mysql username and password. Also set GOOGLE_DIRECTIONS_API_KEY=
- run php artisan migrate
- run php artisan passport:install
- run ./vendor/bin/phpunit to make sure everything is working :)

###System Requirements 
	-PHP >= 7.1.3
	-OpenSSL PHP Extension
	-PDO PHP Extension
	-Mbstring PHP Extension
	-Tokenizer PHP Extension
	-XML PHP Extension
	-Ctype PHP Extension
	-JSON PHP Extension
	-MySQL

##API Documentation & DEMO
https://orderingapi2.docs.apiary.io

## Security Vulnerabilities

If you discover a security vulnerability within this application, please send an e-mail to Mohammad Sulayman via [info@sulayman.com.au](mailto:info@sulayman.com.au). 

## License

The Application is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
