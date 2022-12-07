@php
/**
 * The template for site wide deals section component.
 *
 * This section displays the site wide deals section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */

$deals = [
  array('off' => '$5', 'message' => 'on orders above $15'),
  array('off' => '$15', 'message' => 'on orders above $75'),
  array('off' => '$20', 'message' => 'on orders above $150'),
  array('off' => '$30', 'message' => 'on orders above $200')
];

@endphp

<div class="site-wide-deals-rect left-0 grid grid-cols-5 bg-white">

  @foreach($deals as $deal)
    <x-site-wide-deals-card :off="$deal['off']" :message="$deal['message']" />
  @endforeach

  <div class="checkout">
    <button class="uppercase text-white font-normal font-semibold text-sm text-center items-center bg-black">Check out all site-wide deals</button>
  </div>

</div>
