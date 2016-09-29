<?php 

namespace Ameronix\LaravelBladeStringCompiler;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Engines\CompilerEngine;

class StringViewCompilerServiceProvider extends ServiceProvider 
{

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
    public function boot() {}

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['stringview'] = $this->app->share(function($app)
        {
            //$cache_path = storage_path('app/db-blade-compiler/views');

            $stringView = new StringView();

            dd($stringView);
            //$compiler = new DbBladeCompiler($app['files'], $cache_path, $app['config'], $app);
            //$db_view->setEngine(new CompilerEngine($compiler));

            return $stringView;
        });
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