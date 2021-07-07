<?php

namespace Evilcoders\CommandsMigration;

use Illuminate\Support\ServiceProvider;

class MigrationCommandsProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                RestartCommand::class,
            ]);
        }
    }
}
