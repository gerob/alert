<?php namespace Gerob\Alert;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        // Register the config file
        $this->app['config']->package('gerob/alert', __DIR__.'/../../config');

        // Register our Alert message class
        $this->app['alert'] = $this->app->share(function($app)
        {
            return new AlertBag($app['config']);
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('alert');
	}

}
