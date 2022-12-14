@php
/**
 * The template for recently bought section component.
 *
 * This section displays the recently bought section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */
@endphp

<div class="recently-bought-rect absolute left-0 bg-white">

  <h1 class="flex flex-row items-start justify-center font-extrabold text-4xl text-center items-center capitalized not-italic">Recently Bought</h1>

  <div class="recently-bought-gallery flex justify-center items-top grid-cols-5 gap-3">
    <div class="flex items-start flex-col">
      <image alt="Sale Gallery 1" src="{{ asset('/images/sale1.png') }}" />
      <p class="not-italic flex items-center capitalized text-black font-normal text-sm">Festive Looks Rust Red Ribbed Velvet Long Sleeve Bodysuit</p>
      <p class="not-italic flex items-center capitalized text-black font-semibold text-sm grid-cols-2 gap-5"><span>$38</span></p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Sale Gallery 2" src="{{ asset('/images/sale2.png') }}" />
      <p class="not-italic flex items-center capitalized text-black font-normal text-sm">Chevron Flap Crossbody Bag</p>
      <p class="not-italic flex items-center capitalized text-black font-semibold text-sm grid-cols-2 gap-5"><span class="sale">$5.77</span><span class="line-through">$7.34</span></p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Sale Gallery 3" src="{{ asset('/images/sale3.png') }}" />
      <p class="not-italic flex items-center capitalized text-black font-normal text-sm">Manilla Tan Multi Plaid Oversized Fringe Scarf</p>
      <p class="not-italic flex items-center capitalized text-black font-semibold text-sm grid-cols-2 gap-5"><span class="sale">$29</span><span class="line-through">$39</span></p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Sale Gallery 4" src="{{ asset('/images/sale4.png') }}" />
      <p class="not-italic flex items-center capitalized text-black font-normal text-sm">Diamante Puff Sleeve Dress - Black</p>
      <p class="not-italic flex items-center capitalized text-black font-semibold text-sm grid-cols-2 gap-5"><span>$49.99</span></p>
    </div>

    <div class="flex items-start flex-col">
      <image alt="Sale Gallery 5" src="{{ asset('/images/sale5.png') }}" />
      <p class="not-italic flex items-center capitalized text-black font-normal text-sm">Banneth Open Front Formal Dress in Black</p>
      <p class="not-italic flex items-center capitalized text-black font-semibold text-sm grid-cols-2 gap-5"><span class="sale">$69</span><span class="line-through">$99.95</span></p>
    </div>
  </div>

</div>
