<?php

it('has console/command/install page', function () {
    $artisan = $this->artisan('livewire-notifier:install');
    // $artisan->expectsOutput("Livewire Notifier is installed");
    $artisan->assertExitCode(1);
    
});
