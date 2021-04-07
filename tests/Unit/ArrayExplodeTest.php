<?php
namespace Codemotion\LaravelLivewireNotifier;

use Tests\TestCase; 

it('can destruct array',function(){
    // $data = [
    //     'text' => 'Message'
    // ];
    // $attribute="Message|Title|success|icon";
    // [$message,$title,$success,$icon] = explode('|',$attribute);
    $attribute="Message";
    // dd(array_merge(array_fill(0,4,''),explode('|',$attribute)));
    dd(compact(([$message,$title,$success,$icon] = array_merge(explode('|',$attribute),array_fill(0,4,'')))));
    expect($message)->toBe('Message');
    expect($title)->toBe('Title');
    expect($success)->toBe('success');
    expect($icon)->toBe('icon');
    // 
    // $this->as
});