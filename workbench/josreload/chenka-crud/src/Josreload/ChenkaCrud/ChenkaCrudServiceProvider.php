<?php namespace Josreload\ChenkaCrud;

use App;
use Illuminate\Support\ServiceProvider;

class ChenkaCrudServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('josreload/chenka-crud');

        include __DIR__.'/../../filters.php';

        include __DIR__.'/../../routes.php';

        include __DIR__.'/../../composers.php';
    }


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('Josreload\ChenkaCrud\Accounts\UserInterface', 'Josreload\ChenkaCrud\Accounts\UserRepository');
        $this->app->bind('Josreload\ChenkaCrud\Validations\LoginValidatorInterface', 'Josreload\ChenkaCrud\Validations\UserValidator');

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}