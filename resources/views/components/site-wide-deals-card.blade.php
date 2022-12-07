@props(['off', 'message'])

<div {{ $attributes->merge(['style' => '']) }} class="site-wide-deals text-center p-0 uppercase">
  <div class="flex flex-row items-start text-center items-center">
    <span class="off text-black font-extrabold not-italic flex items-center top-0">{{ $off }}&nbsp;</span>
    <span class="text-black font-extrabold text-lg not-italic flex items-center">Off</span>
  </div>
  <p class="text-black font-normal text-xs not-italic flex items-center text-center left-0 right-0 bottom-0">{{ $message }}</p>
</div>
