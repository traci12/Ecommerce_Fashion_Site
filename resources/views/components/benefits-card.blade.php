@props(['icon', 'message'])

<div {{ $attributes->merge(['style' => '']) }} class="benefits flex flex-row items-start p-0">
  <i class="left-0 top-0 fa-solid {{ $icon }}"></i>
  <span class="text-black font-normal text-xs not-italic flex items-center">{{ $message }}</span>
</div>
