<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminSliderInterface',
            'App\Http\Repositories\Admin\AdminSliderRepository'
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdminQuestionInterface',
            'App\Http\Repositories\Admin\AdminQuestionRepository'
        );

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
