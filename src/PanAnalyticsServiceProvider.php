<?php

namespace DinisEsteves\Pulse\PanAnalytics;

use DinisEsteves\Pulse\PanAnalytics\Livewire\PulseAnalytics;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Livewire\LivewireManager;

class PanAnalyticsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'PanAnalytics');

        $this->callAfterResolving('livewire', function (LivewireManager $livewire, Application $app) {
            $livewire->component('outdated', PulseAnalytics::class);
        });
    }
}
