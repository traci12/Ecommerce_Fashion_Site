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

    <div class="not-italic text-xs grid grid-cols-1 justify-start col-span-2">
      <div class="flex">
        <p class="uppercase font-semibold flex">Follow Us</p>
      </div>
      <div class="flex">
        <p class="uppercase font-semibold flex">We Accept</p>
      </div>
    </div>
  </div>

</div>
