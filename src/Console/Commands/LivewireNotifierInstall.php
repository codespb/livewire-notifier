<?php

namespace CodeSPB\LivewireNotifier\Console\Commands;

use Illuminate\Console\Command;

class LivewireNotifierInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'livewire-notifier:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Livewire Notifier installation.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->table(['Livewire Notifier'], [
            ['Simple notifications system with zero dependencies above TALL-stack.'],
            ["\nVisit site:\nhttps://github.com/codespb/livewire-notifier"]
        ]);
        $this->info('😎 Installing Livewire Notifier…');
        if (!strpos(file_get_contents('./composer.json'), 'livewire/livewire')) {
            $this->comment('Please, make sure that livewire/livewire package is installed!');
            return 1;
        }
        $tailwind_config_path = './tailwind.config.js';
        if (!file_exists($tailwind_config_path)) {
            $this->comment('Please, make sure that Tailwind CSS is installed and tailwind.config.js file is in the project root folder!');
            return 1;
        } else {
            $tailwind_config = file_get_contents($tailwind_config_path);
            if (!strpos($tailwind_config, 'livewire-notifier')) {
                $tailwind_config = preg_replace("#purge:\s*\[\n(.+)\]#imsU", "purge: [\n        \"./config/livewire-notifier.php\",\n$1]", $tailwind_config);
                file_put_contents($tailwind_config_path, $tailwind_config);
            }
        }
        $this->call('vendor:publish', ['--tag'=>'livewire-notifier.config']);
        $this->call('vendor:publish', ['--tag'=>'livewire-notifier.views']);
        $this->info('🥳 Livewire Notifier is installed!');
        return 0;
    }
}
