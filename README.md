# Using the PayPal REST API in PHP to log in a user with PayPal

[![Build Status](https://travis-ci.org/commercefactory/005-paypal-express-checkout-php.svg?branch=master)](https://travis-ci.org/commercefactory/005-paypal-express-checkout-php)

This is an example of the PayPal REST API using the PHP SDK to log in a user with PayPal.

## Technology

This demo uses

* [PHP](http://php.net/)
* [Composer](https://getcomposer.org/)
* [The PayPal REST PHP SDK](https://github.com/paypal/rest-api-sdk-php) (0.8.3 >)

## Running the demo

* Install all dependencies with `composer install`
* Run `php -S 127.0.0.1:9292` to start the app (requires PHP 5.4 or above) or load it in your web server of choice.
* Visit `http://127.0.0.1:9292/` in your browser
* Click the __"Log In with PayPal"__ button
* You will be redirected to PayPal
* Login using the following credentials:
  * Username: `us-customer@commercefactory.org`
  * Password: `test1234`
* Complete the instructions
* You will receive a message that says __"Hi Hiro Protagonist"__

## Running the test

* Requirements:
  * [Firefox](http://getfirefox.com) with the [Selenium IDE](http://seleniumhq.org/projects/ide/plugins.html)
  * PHP 5.4
* Start the app by running `php -S 127.0.0.1:9292`
* Load the [test script](tests/login.html) in the Selenium IDE and run the script
