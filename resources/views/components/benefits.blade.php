@php
/**
 * The template for benefits section component.
 *
 * This section displays the benefits section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */

$benefits = [
  array('icon' => 'fa-crown', 'message' => 'Exclusive Deals for VIP 2 and up!'),
  array('icon' => 'fa-star', 'message' => 'Weekly New Arrivals'),
  array('icon' => 'fa-truck', 'message' => 'Free Shipping On Orders Over $100'),
  array('icon' => 'fa-location-dot', 'message' => 'Track Your Order'),
  array('icon' => 'fa-tag', 'message' => '10% Off On Your First Order!')
];

@endphp

<div class="benefits-rect left-0 grid grid-cols-5 gap-5">

  @foreach($benefits as $benefit)
    <x-benefits-card :icon="$benefit['icon']" :message="$benefit['message']" />
  @endforeach

</div>
