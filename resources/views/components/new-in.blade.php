@php
/**
 * The template for new in section component.
 *
 * This section displays the new in section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */
@endphp

<div class="new-in-rect absolute left-0">

  <img alt="New In Background" src="{{ asset('/images/newin-bg.png') }}" />

  <div class="new-in-container absolute">
    <h1 class="new-in-header flex items-center uppercase not-italic font-extrabold text-white pb-5">New Arrivals</h1>
    <p class="new-in-par flex items-center not-italic font-semibold text-white pb-9">Get ready for the holidays with us!</p>
    <button class="new-in-btn flex flex-row items-start bg-white pb-3"><span class="font-semibold not-italic flex items-center text-lg text-black text-center uppercase">Shop Now</span></button>
  </div>

</div>
