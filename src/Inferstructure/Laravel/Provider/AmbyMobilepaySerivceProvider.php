<?php

namespace Amby\Mobilepay\Infrastructure\Laravel\Provider;

use Illuminate\Support\ServiceProvider;

class AmbyMobilepayServiceProvider extends ServiceProvider {
    public function boot(): void {
        if ($this->app->runningInConsole()) {
            $this->commands(commands: [
            ]);
            $this->publishes(paths: [__DIR__ . '/../../../../config/config.php' => $this->app->configPath(path: 'amby-mobilepay.php'),], groups: 'amby-mobilepay');
            $this->loadMigrationsFrom(paths: [__DIR__ . '/../../../Migration']);
        }
    }
}
