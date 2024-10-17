<?php

namespace DinisEsteves\Pulse\PanAnalytics\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Laravel\Pulse\Livewire\Card;
use Livewire\Attributes\Lazy;

class PanAnalytics extends Card
{
    #[Lazy]
    public function render()
    {
        return View::make('pan-analytics::livewire.pan-analytics', [
            'analytics' => $this->getData()->toArray(),
        ]);
    }

    private function getData(): Collection
    {
        return DB::table('pan_analytics')
            ->get();
    }
}
