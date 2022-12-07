@php
/**
 * The template for trending section component.
 *
 * This section displays the trending section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */

$hashtags = array("#Thanksgiving", "#NewYears", "#Knitted", "#Pajamas", "#WFH", "#FallFashion");

@endphp

<div class="trending-rect absolute left-0 bg-white">

  <h1 class="flex flex-row items-start justify-center font-extrabold text-4xl text-center items-center capitalized not-italic">Now Trending</h1>
  <p class="flex flex-row items-start justify-center font-normal text-sm text-center items-center not-italic">See what everyone’s wearing right now</p>

  <div class="trending-gallery flex justify-center items-top grid-cols-4 gap-8">
    <div class="flex items-start flex-col">
      <image alt="Trending Gallery 1" src="{{ asset('/images/trending1.png') }}" />
      <p class="not-italic flex items-center justify-center w-full uppercase text-black font-semibold text-2xl">Winter Fashion</p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Trending Gallery 2" src="{{ asset('/images/trending2.png') }}" />
      <p class="not-italic flex items-center justify-center w-full uppercase text-black font-semibold text-2xl">Boots</p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Trending Gallery 3" src="{{ asset('/images/trending3.png') }}" />
      <p class="not-italic flex items-center justify-center w-full uppercase text-black font-semibold text-2xl">Night Out</p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Trending Gallery 4" src="{{ asset('/images/trending4.png') }}" />
      <p class="not-italic flex items-center justify-center w-full uppercase text-black font-semibold text-2xl">Holidays</p>
    </div>
  </div>

  <div class="trending-gallery flex justify-center items-top grid-cols-4 gap-8">
    <div class="flex items-start flex-col">
      <image alt="Trending Gallery 5" src="{{ asset('/images/trending5.png') }}" />
      <p class="not-italic flex items-center justify-center w-full uppercase text-black font-semibold text-2xl">Outerwear</p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Trending Gallery 6" src="{{ asset('/images/trending6.png') }}" />
      <p class="not-italic flex items-center justify-center w-full uppercase text-black font-semibold text-2xl">White Dresses</p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Trending Gallery 7" src="{{ asset('/images/trending7.png') }}" />
      <p class="not-italic flex items-center justify-center w-full uppercase text-black font-semibold text-2xl">Sweaters</p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Trending Gallery 8" src="{{ asset('/images/trending8.png') }}" />
      <p class="not-italic flex items-center justify-center w-full uppercase text-black font-semibold text-2xl">Party</p>
    </div>
  </div>

  {{-- HASHTAGS SECTION --}}
  <div class="hashtags justify-center flex flex-row">
    @foreach($hashtags as $hashtag)
      <button class="uppercase text-black font-normal font-semibold text-xs text-center items-center bg-white">{{ $hashtag }}</button>
    @endforeach
  </div>

</div>
