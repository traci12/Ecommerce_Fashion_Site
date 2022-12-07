@php
/**
 * The template for navigation section component.
 *
 * This section displays the fixed navigation section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */
@endphp

<div class="rectangle absolute left-0 right-0 bg-white">

{{-- Right Nav --}}
<div class="right-nav absolute">
  <a class="currency absolute" href="#">
    <div class="currency-rect absolute bg-white box-border"></div>
    <img class="us-flag absolute" src="{{ asset('/images/US-Flag.png') }}" />
    <span class="absolute not-italic font-normal text-sm">USD $</span>
    <i class="fa-solid fa-caret-down absolute"></i>
  </a>
  <a class="bx search absolute" href="#"><i class="fa-solid fa-search"></i></a>
  <a class="bx support absolute" href="#"><i class="fa-solid fa-headset"></i></a>
  <a class="bx heart absolute" href="#"><i class="fa-solid fa-heart"></i></a>
  <a class="bx shopping-bag absolute" href="#"><i class="fa-solid fa-bag-shopping"></i></a>
  <a class="bx user absolute" href="#"><i class="fa-solid fa-user"></i></a>
</div>

{{-- Left Nav --}}
<div class="left-nav absolute">
  <a style="width: 131px; left: 249px;" class="nav-item flex flex-row items-start absolute" href="#accessories"><span class="text-black font-normal text-sm uppercase">Accessories</span></a>
  <a style="width: 68px; left: 116px;" class="nav-item flex flex-row items-start absolute" href="#plus"><span class="text-black font-normal text-sm uppercase">Plus</span></a>
  <a style="width: 65px; left: 184px;" class="nav-item flex flex-row items-start absolute" href="#men"><span class="text-black font-normal text-sm uppercase">Men</span></a>
  <a style="width: 92px; left: 24px;" class="nav-item flex flex-row items-start absolute" href="#women"><span class="active text-black text-sm uppercase">Women</span></a>
</div>

{{-- Logo --}}
<div class="logo absolute">
  <img class="logo-img absolute" src="{{ asset('/images/Logo.png') }}" />
</div>

</div>
