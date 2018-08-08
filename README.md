# Cast
Laravel cast variables

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

`Cast::_arr()` or `Cast::_array()`

`Cast::_obj()` or `Cast::_object()`

`Cast::_null()`

`Cast::_float()`

`Cast::_double()`
