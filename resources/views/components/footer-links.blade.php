@props(['info', 'support', 'care'])

<div class="footer-links">

  <div class="copyright grid grid-cols-7 gap-3">
    <div class="not-italic text-xs flex justify-start grid grid-cols-1">
      <p class="uppercase font-semibold flex">Company Info</p>
      @foreach($info as $inf)
        <a href="#" class="font-normal flex pt-3">{{ $inf['title'] }}</a>
      @endforeach
    </div>

    <div class="not-italic text-xs flex justify-start grid grid-cols-1">
      <p class="uppercase font-semibold flex">Help & Support</p>
      @foreach($support as $supt)
        <a href="#" class="font-normal flex pt-3">{{ $supt['title'] }}</a>
      @endforeach
    </div>

    <div class="not-italic text-xs flex justify-start grid grid-cols-1">
      <p class="uppercase font-semibold flex">Customer Care</p>
      @foreach($care as $c)
        <a href="#" class="font-normal flex pt-3">{{ $c['title'] }}</a>
      @endforeach
    </div>

    <div class="not-italic flex flex-row text-xs grid grid-cols-1 justify-start">
      <div class="flex flex-row grid grid-cols-1 justify-start">
        <p class="uppercase font-semibold flex">Follow Us</p>
	<div class="flex flex-row">
	  <i class="pr-3 fa-brands fa-facebook-f"></i>
          <i class="pr-3 fa-brands fa-instagram"></i>
          <i class="pr-3 fa-brands fa-twitter"></i>
          <i class="pr-3 fa-brands fa-youtube"></i>
          <i class="pr-3 fa-brands fa-pinterest-p"></i>
          <i class="pr-3 fa-brands fa-tiktok"></i>
	</div>
      </div>
      <div class="flex flex-row grid grid-cols-1 justify-start">
        <p class="uppercase font-semibold flex">We Accept</p>
        <div class="flex flex-row">
	  <img class="payment-ico pr-3" alt="Payment 1" src="{{ asset('/images/payment1.png') }}" />
          <img class="payment-ico pr-3" alt="Payment 2" src="{{ asset('/images/payment2.png') }}" />
          <img class="payment-ico pr-3" alt="Payment 3" src="{{ asset('/images/payment3.png') }}" />
          <img class="payment-ico pr-3" alt="Payment 4" src="{{ asset('/images/payment4.png') }}" />
          <img class="payment-ico pr-3" alt="Payment 5" src="{{ asset('/images/payment5.png') }}" />
        </div>
      </div>
    </div>
  </div>

</div>
