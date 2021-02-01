---
extends: _layouts.master
title: About HPE Industry
---

{{-- Responsive Helper Bar. Remove when done --}}
<div class="container p-2 mx-auto text-xs bg-gray-300">
     <span class="sm:hidden">extra small</span>
     <span class="hidden sm:inline-block md:hidden">small</span>
     <span class="hidden md:inline-block lg:hidden">medium</span>
     <span class="hidden lg:inline-block xl:hidden">large</span>
     <span class="hidden xl:inline-block">extra large</span>
</div>


@section('body')
@include('assets._partials.upper_band')
@include('assets._partials.navigation')

<section class="section">
   <div class="flex">
     <div class="w-1/2">
          <h1 class="text-2xl font-semibold text-primary">About HPE Industry LTD.</h1>
          <p class="mt-4 text-xl leading-relaxed text-gray-600 leading max-w-prose">
               Established in April 2005, we are a well stocked, full service hydraulic, pneumatic and electronics- company that offers a wide range of hydraulics, pneumatics and electronic equipment, as well as air-filtration, drives, instrumentation, valves etc. We are authorized distributors and service providers for FESTO, AIGNEP, AUTONICS, COMEX, FINDER, INFINITY, JORC, M&M ROTORK, MEI, OMI, and SHINY products in Ghana. We stock and provide only superior products from trusted names!
          </p>

          <p class="mt-4 text-xl text-gray-600 max-w-prose">
          Because of this, H.P.E. INDUSTRY LTD. has earned a reputation of being among the best in the industry, a large part of which is due to the fact that we have a genuine interest in our customer’s success.
          </p>

     </div>
     <div class="w-1/2">
          <img src="/assets/images/festo_technicians.jpg" alt="HPE industry Technicians">
     </div>
</div>  
</section>


@endsection
