<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

/**
 * Class RouteServiceProvider
 *
 * This class is responsible for defining the route mappings for the application.
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for the application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
    }
    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless and do not require session state.
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace . '\Api')
            ->group(base_path('routes/api.php'));
    }
    /**
     * Define the "web" routes for the application.
     *
     * These routes typically require session state and CSRF protection.
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }
}
