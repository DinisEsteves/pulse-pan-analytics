<?php

namespace DinisEsteves\Pulse\PanAnalytics\Livewire;

use Illuminate\Support\Facades\View;
use Laravel\Pulse\Livewire\Card;
use Pan\Adapters\Laravel\Repositories\DatabaseAnalyticsRepository;
use Pan\Presentors\AnalyticPresentor;

class PulseAnalytics extends Card
{
    public function getData(): array
    {
        $analytic = new DatabaseAnalyticsRepository;
        $presenter = new AnalyticPresentor;

        $data = collect($analytic->all())->map(fn ($item) => $presenter->present($item));

        return $data->toArray();
    }

    public function render()
    {
        return View::make('livewire.pulse-pan', [
            'analytics' => $this->getData(),
        ]);
    }
}
