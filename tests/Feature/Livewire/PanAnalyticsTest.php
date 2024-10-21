<?php

namespace DinisEsteves\Pulse\PanAnalytics\Tests\Feature\Livewire;

use DinisEsteves\Pulse\PanAnalytics\Livewire\PanAnalytics;
use Livewire\Livewire;

it('can set card props', function () {
    Livewire::test(PanAnalytics::class, ['cols' => 4, 'rows' => 2])
        ->assertSet('cols', 4)
        ->assertSet('rows', 2);
});
