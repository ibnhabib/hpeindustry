---
extends: _layouts.master
title: HPE Industry | Services
---


@section('body')
@include('assets._partials.upper_band')
@include('assets._partials.navigation')

<section class="pb-24 section">
  <div class="flex flex-col md:flex-row">

    <div class="mt-4 md:mt-0 order-last mr-12 md:order-first md:w-1/3">
      <img class="w-full" src="/assets/images/pipes-7.jpg" alt="HPE Industry Piping. Infinity Solutions">
      <img class="w-full mt-2" src="/assets/images/festo-working-area.jpg"
        alt="HPE Industry Piping. Infinity Solutions">
    </div>

    <div class="flex-shrink-0 mr-4 md:w-2/3 content">

      <h1>Contact Us</h1>

      <p class="lead">There are several ways to reach us. Get in touch with us for a free consultation</p>

      <div class="md:flex mt-4">
        <div class="mr-24">
          <h2>By Phone</h2>
          <dl class="mb-4">
            <dt class="mt-4 text-primary uppercase">Mobile/Whatsapp</dt>
            <dd><a href="tel:+233243366718">+233 (0) 243 366 718</a></dd>

            <dt class="mt-4 text-primary uppercase">Landline</dt>
            <dd>233 (0) 302 235 108</dd>

            <dt class="mt-4 text-primary uppercase">Fax</dt>
            <dd>+233 (0) 302 235 109</dd>
          </dl>

          <h2>By Email</h2>

          <p><a href="mailto:sales@hpeindustry.com">sales@hpeindustry.com</a></p>

          <h2>Facebook Page</h2>
          <a href="https://web.facebook.com/hpeindustry" class="white_button">Join our Facebook Page</a>
        </div>
        <div class="flex-grow">
          <h2>Map</h2>
          <div class="mt-4">
            <iframe style="min-height: 300px; width: 100%; background-color:#eaeaea" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_d&amp;hl=en&amp;saddr=5.583324,-0.224348&amp;z=15&amp;output=embed">
            </iframe>
          </div>
        </div>
      </div>


    </div>

  </div>
</section>


@endsection