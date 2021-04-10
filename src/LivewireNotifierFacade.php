<?php

namespace CodeSPB\LivewireNotifier;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodeSPB\LivewireNotifier\LivewireNotifier
 */
class LivewireNotifierFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'livewire-notifier';
    }
}
