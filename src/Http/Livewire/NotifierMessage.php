<?php

namespace CodeSPB\LivewireNotifier\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;

class NotifierMessage extends Component
{
    /**
     * Message from attributes bag
     *
     * @var String
     */
    public $message;
    /**
     * Time in ms which message is shown
     * 0 for unlimited time
     * @var integer
     */
    public $duration;

    public $msgClass;
    public $progressClass;
    /**
     * Whether message is closable by click
     *
     * @var boolean
     */
    public $closable = true;
    /**
     * Mount lifecycle action
     *
     * @return void
     */
    public function mount(){
        $this->duration = $this->duration ?? config('livewire-notifier.duration');
        $this->closable = $this->closable ?? config('livewire-notifier.closable');
        $this->msgClass = $this->msgClass ?? config('livewire-notifier.types.' . ($this->message['type'] ?? 'default') . '.msgClass',config('livewire-notifier.types.default.msgClass'));
        $this->progressClass = $this->progressClass ?? config('livewire-notifier.types.' . ($this->message['type'] ?? 'default') . '.progressClass',config('livewire-notifier.types.default.progressClass'));
    }
    
    public function render()
    {
        $this->message = array_merge([
            'text'=>'',
            'title' => '',
            'icon' => '',
            'type' => 'success',
            'duration' => $this->duration,
            'msgClass' =>  $this->msgClass,
            'progressClass' =>  $this->progressClass,
            'closable' => $this->closable,
        ], $this->message);
        return view('livewire-notifier::livewire.notifier-message');
    }
}
