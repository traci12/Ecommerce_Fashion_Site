@php
/**
 * The template for insta section component.
 *
 * This section displays the insta section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */
@endphp

<div class="insta-rect absolute left-0">

  <h1 class="flex flex-row items-start justify-center font-extrabold text-4xl text-center items-center capitalized not-italic">Your Next Inspo</h1>
  <p class="flex flex-row items-start justify-center font-normal text-sm text-center items-center not-italic">Checkout who’s wearing what by using #THREADEDInspo on Instagram</p>

  <div class="insta-gallery flex justify-center items-center grid-cols-5 gap-3">
    <image alt="Insta Gallery 1" src="{{ asset('/images/insta1.png') }}" />
    <image alt="Insta Gallery 2" src="{{ asset('/images/insta2.png') }}" />
    <image alt="Insta Gallery 3" src="{{ asset('/images/insta3.png') }}" />
    <image alt="Insta Gallery 4" src="{{ asset('/images/insta4.png') }}" />
    <image alt="Insta Gallery 5" src="{{ asset('/images/insta5.png') }}" />
  </div>

  <div class="view-all-posts justify-center flex flex-row">
    <button class="uppercase text-white font-normal font-semibold text-sm text-center items-center bg-black">View all posts</button>
  </div>

</div>
