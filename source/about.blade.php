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
   <div class="md:flex">
     <div class="w-1/2 mr-4 content">

          <h1 class="text-2xl font-bold text-primary">About HPE Industry LTD.</h1>

          <p class="mt-4 text-xl leading-relaxed text-gray-600 leading max-w-prose">
               Established in April 2005, we are a well stocked, full service hydraulic, pneumatic and electronics- company that offers a wide range of hydraulics, pneumatics and electronic equipment, as well as air-filtration, drives, instrumentation, valves etc. We are authorized distributors and service providers for FESTO, AIGNEP, AUTONICS, COMEX, FINDER, INFINITY, JORC, M&M ROTORK, MEI, OMI, and SHINY products in Ghana. We stock and provide only superior products from trusted names!
          </p>

          <p class="text-xl text-gray-600">
          Because of this, H.P.E. INDUSTRY LTD. has earned a reputation of being among the best in the industry, a large part of which is due to the fact that we have a genuine interest in our customer’s success.
          </p>

     </div>
     <div class="w-1/2">
          <figure class="table">
            <img src="/assets/images/festo_technicians.jpg" alt="HPE industry Technicians">
               <div class="table-caption mt-4 text-sm text-primary" style="caption-side:bottom">
                    Our technicians and factory trained engineers (who work with us since the very beginning of H.P.E. INDUSTRY LTD.), are experienced experts (certified engineers), in their respective mechanical, electromechanical, and industrial engineering fields.
               </div>   
          </figure>
          
     </div>
</div>  
</section>
<section class="section">
     <div class="flex justify-between w-full pb-12">
          <div class="w-1/3 ">
              <img src="/assets/images/pipes-4.jpg" alt="">
              <img src="/assets/images/pipes-1.jpg" alt="">
          </div>
          <div class="w-1/3 ">
               2
          </div>
          <div class="w-1/3 ">
               3
          </div>
     </div>
</section>

@endsection
