<?php

namespace Golchha21\IconsAsComponents\Providers;

use Illuminate\Support\ServiceProvider as SP;
use Illuminate\Support\Facades\Blade;

class ServiceProvider extends SP
{
    private const BI_PATH = __DIR__ . "/../../resources/views/components/bi";

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(self::BI_PATH, 'bi');

        collect(scandir(self::BI_PATH))->each(function ($component) {
            if ($iconName = strstr($component, '.blade.php', true) ?: null) {
                Blade::component("bi::$iconName", "bi-$iconName");
            }
        });
    }
}
