---
extends: _layouts.master
title: HPE Industry | Services
---


@section('body')
@include('assets._partials.upper_band')
@include('assets._partials.navigation')

<section class="pb-24 section">
   <div class="flex flex-col md:flex-row">

     <div class="order-last mr-12 md:order-first md:w-1/3">
          <img class="w-full" src="/assets/images/pipes-6.jpg" alt="HPE Industry Piping. Infinity Solutions">
          <img class="w-full mt-2" src="/assets/images/pipes-5.jpg" alt="HPE Industry Piping. Infinity Solutions">
          <img class="w-full mt-2" src="/assets/images/pipes-2.jpg" alt="HPE Industry Piping. Infinity Solutions">
          <img class="w-full mt-2" src="/assets/images/pipes-3.jpg" alt="HPE Industry Piping. Infinity Solutions"> 
      </div>
     
      <div class="flex-shrink-0 mr-4 md:w-2/3 content">
        
        <h1>Contact Us</h1>

        <p class="lead">There are several ways to reach us. Get in touch with us for a free consultation</p>

        <h2>By Phone</h2>
        <dl>
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
    </div>

</div>  
</section>


@endsection
