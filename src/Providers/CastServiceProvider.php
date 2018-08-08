<?php

namespace Howkins\Cast\Providers;

use Illuminate\Support\ServiceProvider;
use Howkins\Cast\CastBuilder;
use Howkins\Cast\Contracts\Cast;

class CastServiceProvider extends ServiceProvider
{	
	public function register()
	{
		$this->app->bind('cast', CastBuilder::class);
		$this->app->bind(Cast::class, CastBuilder::class);
	}
}
