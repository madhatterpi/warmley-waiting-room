@extends('layouts.app')

@section('content')
<!-- HERO SECTION -->
@include('partials.hero-section')

<div class="container my-6 contact-section">
  <div class="row f-flex justify-content-md-center">
    <div class="col-lg-5">
    <div class="contact-details">
      <h2>Contact</h2>
      <p>Get in touch with us if you have any questions or want to let us know how we're doing.</p>
      <a href="mailto:hello@warmleywaitingroom.co.uk">hello@warmleywaitingroom.co.uk</a>
      <a href="tel:+47747194733">07747 194733</a>
      </div>
      <div class="address mb-5">
      <h2>Address</h2>
      <span>Warmley Waiting Room</span>
      <span>Bristol and Bath Railway Path</span>
      <span>Warmely</span>
      <span>BS30 5JB</span>
      </div>
    </div>

    <div class="col-lg-6">
        <!-- MAP SECTION -->
  <div class="container-fluid">
  <div class="row">
    <div class="col p-0">
    <div style="overflow:hidden;width: 100%;position: relative;"><iframe width="100%" height="450" src="https://maps.google.com/maps?width=1920&amp;height=450&amp;hl=en&amp;q=Warmley%20Waiting%20Room%2C%20Bristol%20And%20Bath%20Railway%20Path%2C%20Warmley%2C%20Bristol%20BS30%205JB+(Warmley)&amp;ie=UTF8&amp;t=&amp;z=11&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 2px;background: #fff;"></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
    </div>
  </div>
</div>
    <!-- <img class="contact-image" src="@asset('images/flat-white-1.jpg')"> -->
    </div>
  </div>



</div>






@endsection
