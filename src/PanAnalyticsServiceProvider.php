<?php

namespace DinisEsteves\Pulse\PanAnalytics;

use DinisEsteves\Pulse\PanAnalytics\Livewire\PanAnalytics;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Livewire\LivewireManager;

class PanAnalyticsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'pan-analytics');

        $this->callAfterResolving('livewire', function (LivewireManager $livewire, Application $app) {
            $livewire->component('pan-analytics', PanAnalytics::class);
        });
    }
}
