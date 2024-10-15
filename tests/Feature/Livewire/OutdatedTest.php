<?php

namespace DinisEsteves\Pulse\PanAnalytics\Tests\Feature\Livewire;

use DinisEsteves\Pulse\PanAnalytics\Livewire\PanAnalytics;
use DinisEsteves\Pulse\PanAnalytics\Tests\TestCase;
use Livewire\Livewire;
use Orchestra\Testbench\Attributes\WithMigration;
use PHPUnit\Framework\Attributes\Test;

#[WithMigration]
class OutdatedTest extends TestCase
{
    #[Test]
    public function it_can_set_card_props()
    {
        Livewire::test(PanAnalytics::class, ['cols' => 4, 'rows' => 2])
            ->assertSet('cols', 4)
            ->assertSet('rows', 2);
    }
}
