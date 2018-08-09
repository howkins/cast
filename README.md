# Cast

[![Packagist](https://img.shields.io/packagist/dt/howkins/cast.svg)](https://packagist.org/packages/howkins/cast)
[![Packagist](https://img.shields.io/packagist/l/howkins/cast.svg)](https://packagist.org/packages/howkins/cast)
[![Packagist](https://img.shields.io/packagist/v/howkins/cast.svg)](https://packagist.org/packages/howkins/cast)


# Instalation

If Laravel version is less than 5.5 is need to include manually in `config/app.php`  

Service provider
```php
	'providers' => [
		Howkins\Cast\Providers\CastServiceProvider::class
	]
```
Facade
```php
	'aliases' => [
		"Cast" => Howkins\Cast\Facades\Cast::class
	]
```

Can be usage and contract in follow namespace `Howkins\Cast\Contracts\Cast`

# Available methods for cast

`Cast::_str()` or `Cast::_string()`

`Cast::_int()` or `Cast::_integer()`

`Cast::_bool()` or `Cast::_boolean()`  
```php
Cast::_bool('false', $strict = 0); // print bool(false) if strict is 1 will return bool(true)
Cast::_bool('0.0', $strict = 0); // print bool(false) if strict is 1 will return bool(true)
```

`Cast::_arr()` or `Cast::_array()`

`Cast::_obj()` or `Cast::_object()`

`Cast::_null()`

`Cast::_float()`

`Cast::_double()`
