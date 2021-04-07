<?php

namespace CodeSPB\LaravelLivewireNotifier\Facades;

use Illuminate\Support\Facades\Facade;

class LivewireNotifier extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'livewire-notifier';
    }
}
