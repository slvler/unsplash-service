# unsplash-service

[![tests](https://github.com/slvler/unsplash-service/actions/workflows/tests.yml/badge.svg)](https://github.com/slvler/unsplash-service/actions/workflows/tests.yml)
[![Latest Stable Version](https://poser.pugx.org/slvler/unsplash-service/v)](https://packagist.org/packages/slvler/unsplash-service) 
[![Latest Unstable Version](https://poser.pugx.org/slvler/unsplash-service/v/unstable)](https://packagist.org/packages/slvler/unsplash-service) 
[![License](https://poser.pugx.org/slvler/unsplash-service/license)](https://packagist.org/packages/slvler/unsplash-service)
[![Total Downloads](https://poser.pugx.org/slvler/unsplash-service/downloads)](https://packagist.org/packages/slvler/unsplash-service)

This package provides a convenient wrapper to the [Unsplash API](https://unsplash.com/documentation)  for Laravel applications.
## Requirements
- PHP 8.0+
- Laravel 9.x
## Installation
To install this package tou can use composer:
```bash
composer require slvler/unsplash-service
```
## Usage
- First of all we'll add the API key and API Url of the service we're using to our .env file of our project. If you don't have an account yet on unsplash.com, you should create one. Once you have an account you can copy your API key from the dashboard page and put it into you .env file.
```php
UNSPLASH_BASE_URL="https://api.unsplash.com/"
UNSPLASH_ACCESS_KEY=
UNSPLASH_SECRET_KEY=
```
#### Features
- Collection
- Search
