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
     <div class="mr-4 md:w-1/2 content">

          <h1 class="text-2xl font-bold text-primary">About HPE Industry LTD.</h1>

          <p class="mt-4 text-xl leading-relaxed text-gray-600 leading max-w-prose">
               Established in April 2005, we are a well stocked, full service hydraulic, pneumatic and electronics- company that offers a wide range of hydraulics, pneumatics and electronic equipment, as well as air-filtration, drives, instrumentation, valves etc. We are authorized distributors and service providers for FESTO, AIGNEP, AUTONICS, COMEX, FINDER, INFINITY, JORC, M&M ROTORK, MEI, OMI, and SHINY products in Ghana. We stock and provide only superior products from trusted names!
          </p>

          <p class="text-xl text-gray-600">
          Because of this, H.P.E. INDUSTRY LTD. has earned a reputation of being among the best in the industry, a large part of which is due to the fact that we have a genuine interest in our customer’s success.
          </p>

     </div>
     <div class="md:w-1/2">
          <figure class="table">
            <img src="/assets/images/festo_technicians.jpg" alt="HPE industry Technicians">
               <div class="table-caption mt-4 text-sm text-primary" style="caption-side:bottom">
                    Our technicians and factory trained engineers (who work with us since the very beginning of H.P.E. INDUSTRY LTD.), are experienced experts (certified engineers), in their respective mechanical, electromechanical, and industrial engineering fields.
               </div>   
          </figure>
          
     </div>
</div>  
</section>
<section class="mt-4 section">
     <div class="justify-between w-full pb-12 md:flex ">
          <div class="mr-4 md:w-1/3">
              <img src="/assets/images/pipes-4.jpg" alt="">
              <img src="/assets/images/pipes-1.jpg" class="mt-2" alt="">
          </div>
          <div class="mr-6 md:w-1/3 content" >
               <h2 class="text-2xl font-bold text-primary">Service</h2>
                    <p>Our experienced and service-oriented team in our head office in Accra, has the complete understanding of all the components and specific requirements.</p>

                    <p>With a commitment to swift, reliable and responsible service, we can deliver all these products, allowing your production to stay operational at all times.</p>

                    <p>Whether you work in mining, agriculture, food processing or other industry.</p>

                    <p>We are giving you the confidence that only best-in-class products are being fitted for your application or installation.</p>

                    <p>To inquire about our products and services, or to find out more about how we can assist you, do not hesitate to contact us today. The H.P.E. team is available for you!</p>

                    <h2 class="mt-4 text-2xl font-bold text-primary">Quality Assurance</h2>
                    <p>We stand behind every product that leaves our doors.</p>

                    <p>Each component is carefully designed, tested, re-tested, checked and rechecked until we are 100% satisfied it meets stringent performance standards and exact specifications.</p>

                    <p>Our up-to-date technology and advanced training assures you get the very best product available</p>
          </div>
          <div class="md:w-1/3 content">
               <h2 class="text-2xl font-bold text-primary">Core Values</h2>
               <p>Safety, integrity and responsibility in everything we do Highly experienced and competent Service Team. Fast & friendly support, attention to every detail</p>

               <h2 class="text-2xl font-bold text-primary">Customer Service</h2>
               <p>At H.P.E. INDUSTRY LTD. we are always ready and able to answer or assist you with any questions or problems you may have.No customer is too small. No question goes unanswered.</p>

               <p>We pride ourselves on responding to the needs of our customers – before and long after the point of sale.We are able to make any modifications to existing products to fit your specific applications.</p>

               <p>We expect nothing less than complete customer satisfaction.</p>
               <hr class="my-4">
               <img src="/assets/images/services-pc.jpg" alt="">
          </div>
     </div>
</section>

@endsection
