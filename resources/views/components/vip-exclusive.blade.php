@php
/**
 * The template for vip exclusive section component.
 *
 * This section displays the vip exclusive section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */
@endphp

<div style="background-image: url('{{ asset('/images/vip-bg.png') }}')" class="vip-exclusive-rect absolute left-0 grid grid-cols-4 gap-3">

  <p class="exclusive-header flex justify-center items-center uppercase font-extrabold text-white col-span-2">Black Friday Exclusive</p>

  <p class="free-shipping flex items-center uppercasefont-semibold not-italic text-lg text-white">Free shipping on all orders for VIP 2 and up!</p>

  <div class="shop-now flex justify-center content-center text-center items-center">
    <button class="uppercase text-black font-normal font-semibold text-sm text-center items-center bg-white">Shop Now</button>
  </div>

</div>
