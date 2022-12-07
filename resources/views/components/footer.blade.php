@php
/**
 * The template for footer section component.
 *
 * This section displays the footer section of ecommerce fashion site.
 *
 * @package Laravel
 * @author Tristan Jake Alcantara
 * @since 2022
 */

$info = [
  array('title' => "About THREADED"),
  array('title' => "Affiliate"),
  array('title' => "Blog"),
  array('title' => "Careers"),
  array('title' => "")
];

$support = [
  array('title' => "FAQ"),
  array('title' => "Shipping"),
  array('title' => "Returns"),
  array('title' => "How To Order"),
  array('title' => "How To Track")
];

$care = [
  array('title' => "Contact Us"),
  array('title' => "Payment Methods"),
  array('title' => ""),
  array('title' => ""),
  array('title' => "")
];

@endphp

<div class="footer-rect absolute left-0 bg-white">

  {{-- LINKS SECTION --}}
  <x-footer-links :info=$info :support=$support :care=$care />

  {{-- COPYRIGHT SECTION --}}
  <div class="copyright grid grid-cols-2 gap-5">
    <p class="not-italic font-normal text-xs flex items-center justify-start">©2021 THREADED All Rights Reserved.</p>
    <div class="not-italic font-normal text-xs flex items-center justify-end">
      <img class="logo-img" alt="THREADED" src="{{ asset('/images/Logo.png') }}" />
    </div>
  </div>

</div>
