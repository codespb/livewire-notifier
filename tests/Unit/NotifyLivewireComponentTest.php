<?php

use Livewire\Livewire;
use Codemotion\LaravelLivewireNotifier\Http\Livewire\Notifier;

it('renders livewire component',function(){
    Livewire::test(Notifier::class)->set('message',"Test message")->assetSet('message','Test message');
});