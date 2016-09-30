<?php 

namespace Ameronix\LaravelBladeStringCompiler;

use Illuminate\Support\ServiceProvider;

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
            return new StringView( new StringViewCompiler($app['files'], storage_path('app/string-blade-compiler/views')) );
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