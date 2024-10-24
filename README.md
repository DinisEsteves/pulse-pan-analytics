# Pan Analytics card for Laravel Pulse
<p align="center">
    <img src="https://raw.githubusercontent.com/DinisEsteves/pulse-pan-analytics/refs/heads/main/docs/pulse-pan-analytics2.png" width="100%" alt="Pan">
</p>

---
This card will display the [pan](https://github.com/panphp/pan) analytics data;

## Installation

Require the package with Composer:

```shell
composer require dinisesteves/pulse-pan-analytics
```

## Add to your dashboard

To add the card to the Pulse dashboard, you must first [publish the vendor view](https://laravel.com/docs/10.x/pulse#dashboard-customization).

Then, you can modify the `dashboard.blade.php` file:

```diff
<x-pulse>
+   <livewire:pan-analytics cols='6' />

    <livewire:pulse.servers cols="full" />

    <livewire:pulse.usage cols="4" rows="2" />

    <livewire:pulse.queues cols="4" />

    <livewire:pulse.cache cols="4" />

    <livewire:pulse.slow-queries cols="8" />

    <livewire:pulse.exceptions cols="6" />

    <livewire:pulse.slow-requests cols="6" />

    <livewire:pulse.slow-jobs cols="6" />

    <livewire:pulse.slow-outgoing-requests cols="6" />

</x-pulse>
```

## Todo

- Add sorting;
- Add config for the number of items to display;

That's it!
