  <div x-transition:enter="transition transform-gpu ease-in" x-transition:enter-start="opacity-0 -translate-y-full"
      x-transition:enter-end="opacity-1 translate-y-0" x-transition:leave="transition transform-gpu duration-500"
      x-transition:leave-start="opacity-1" x-transition:leave-end="opacity-0 translate-x-full" x-data="{show: false}"
      x-show="show" 
      @if($message['closable'])@click="show=false" @keydown.escape.window="show=false"@endif x-init="
            setTimeout(()=>{
            show=true
            },50); @if($message['duration'])
            setTimeout(()=>{
                show=false;
                },{{ $message['duration'] }}); @endif">
      <div class="@if($message['closable']) cursor-pointer @endif flex flex-col select-none {{ $message['msgClass'] }} {{ config('livewire-notifier.defaultMsgClass')}} overflow-hidden">
          <div class="flex flex-row">
              <div class="flex flex-col items-center justify-center p-2">
                  @if ($message['icon'])
                      {!! $message['icon'] !!}
                  @else
                       @include(config('livewire-notifier.types.'.$message['type'].'.icon'))
                  @endif
              </div>
              <div class="flex flex-col items-start justify-center p-2 select-none">
                  @if ($message['text'])
                      <h3 class="text-xl font-bold outline-none">{{ $message['title'] }}</h3>
                  @endif
                  <p class="outline-none">
                  {{ $message['text'] }}
                  </p>
              </div>
          </div>
          @if($message['progressClass'])
          <div x-ref="progress" x-show="show" x-transition:enter-start="translate-x-0"
              x-transition:enter-end="-translate-x-full"
              class="{{ $message['progressClass'] }} h-1 w-full transition transform-gpu animate-pulse"
              style="transition-duration: {{ $message['duration'] }}ms">
          </div>
          @endif
      </div>
  </div>
