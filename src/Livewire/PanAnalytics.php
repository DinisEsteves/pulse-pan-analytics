<?php

namespace DinisEsteves\Pulse\PanAnalytics\Livewire;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Laravel\Pulse\Livewire\Card;
use Livewire\Attributes\Lazy;
use Pan\Contracts\AnalyticsRepository;
use Pan\Presentors\AnalyticPresentor;
use Pan\ValueObjects\Analytic;

class PanAnalytics extends Card
{
    private AnalyticPresentor $presentor;

    public function __construct()
    {
        $this->presentor = new AnalyticPresentor;
    }

    #[Lazy]
    public function render()
    {
        return View::make('pan-analytics::livewire.pan-analytics', [
            'analytics' => $this->getData(),
        ]);
    }

    /**
     * @return array<int, array<int,string>>
     */
    private function getData(): array
    {
        $analyticsRepository = App::make(AnalyticsRepository::class);

        $analytics = $analyticsRepository->all();

        return array_map(fn (Analytic $analytic): array => $this->presentor->present($analytic), $analytics);
    }
}
