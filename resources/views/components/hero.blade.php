@php
/**
 * The template for hero section component.
 *
 * This section displays the hero section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */
@endphp

<div class="hero-rect absolute left-0">

  {{-- Hero Slider --}}
  <div class="hero-slider left-0 grid grid-cols-2">

    {{-- Mask Section Left --}}
    <div class="maskgroup-left absolute left-0">
      <img alt="Hero Mask Left Image" src={{ asset('/images/HeroMask-left.png') }}></img>
    </div>

    {{-- Mask Section Right --}}
    <div class="maskgroup-right absolute right-0">
      <img alt="Hero Mask Right Image" src={{ asset('/images/HeroMask-right.png') }}></img>
    </div>


    {{-- Hero Opening --}}
    <img class="hero-opening absolute" src={{ asset('/images/Hero-opening.png') }}></img>

    {{-- Hero Button --}}
    <button class="hero-btn flex flex-row items-start absolute bg-white"><span class="font-semibold font-normal flex items-center text-4xl text-black text-center uppercase">Shop Now</span></button>

    {{-- Hero Navigation --}}
    <div class="slider-arrows absolute">
      <i class="arrow-left absolute fa-solid fa-chevron-left text-white text-4xl"></i>
      <i class="arrow-right absolute fa-solid fa-chevron-right text-white text-4xl"></i>
    </div>
    <div class="slider-bullets absolute">
      <i class="active fa-solid fa-circle"></i>
      <i class="fa-solid fa-circle"></i>
    </div>
  </div>

</div>
