<?php
// use Livewire\Livewire;
use Livewire\Component;
use function Pest\Livewire\livewire;
use CodeSPB\LivewireNotifier\Http\Livewire\Notifier; 

beforeEach(function(){
    $this->message = [
        'text' => "Let's have fun!"
    ];
    $this->messageFromMessageBag = [
        'text' => "Let's have fun!",
        'title' => '',
        'icon' => '',
        'type' => 'success'
    ];
});
// it('accepts message argument', function () {
//     livewire(Notifier::class)->set('message',$this->message)->assertSet('message',$this->message);
// });
it('adds message to message bag received as an argument',function(){
    $livewire = livewire(Notifier::class,['message'=>$this->message]);
    $this->assertCount(1,$livewire->messages);
});
it('adds message to message bag by calling addMsg action',function(){
    $livewire = livewire(Notifier::class)->call('addMsg',$this->message);
    $this->assertCount(1,$livewire->messages);
    $this->assertEquals($this->messageFromMessageBag,$livewire->messages->pop());
});
it('grab message from session',function(){
    session()->flash('notifier',$this->message);
    $livewire = livewire(Notifier::class);
    $this->assertCount(1,$livewire->messages);
});
it('reacts on "notifier" event',function(){
    $this->message = [
        'text' => "Let's have fun!"
    ];
    $livewire = livewire(Notifier::class);
    $livewire->emit('message',$this->message);
    $this->assertCount(1,$livewire->messages);
});
