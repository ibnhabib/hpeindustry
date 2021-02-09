---
extends: _layouts.master
title: About HPE Industry
---

@section('body')
@include('assets._partials.upper_band')
@include('assets._partials.navigation')

<section class="section">
   <div class="md:flex">
     <div class="mr-4 md:w-1/2 content">

          <h1>About HPE Industry LTD.</h1>

          <p class="lead">
               Established in April 2005, we are a well stocked, full service hydraulic, pneumatic and electronics- company that offers a wide range of hydraulics, pneumatics and electronic equipment, as well as air-filtration, drives, instrumentation, valves etc. We are authorized distributors and service providers for FESTO, AIGNEP, AUTONICS, COMEX, FINDER, INFINITY, JORC, M&M ROTORK, MEI, OMI, and SHINY products in Ghana. We stock and provide only superior products from trusted names!
          </p>

          <p class="lead">
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
     <div class="flex flex-col justify-between w-full pb-12 md:flex-row ">
          <div class="order-last mt-4 mr-4 md:mt-0 md:w-1/3 md:order-first">
              <img src="/assets/images/pipes-4.jpg" alt="">
              <img src="/assets/images/pipes-1.jpg" class="mt-2" alt="">
          </div>
          <div class="mr-6 md:w-1/3 content" >
               <h2>Service</h2>
                    <p>Our experienced and service-oriented team in our head office in Accra, has the complete understanding of all the components and specific requirements.</p>

                    <p>With a commitment to swift, reliable and responsible service, we can deliver all these products, allowing your production to stay operational at all times.</p>

                    <p>Whether you work in mining, agriculture, food processing or other industry.</p>

                    <p>We are giving you the confidence that only best-in-class products are being fitted for your application or installation.</p>

                    <p>To inquire about our products and services, or to find out more about how we can assist you, do not hesitate to contact us today. The H.P.E. team is available for you!</p>

                    <h2>Quality Assurance</h2>

                    <p>We stand behind every product that leaves our doors.</p>

                    <p>Each component is carefully designed, tested, re-tested, checked and rechecked until we are 100% satisfied it meets stringent performance standards and exact specifications.</p>

                    <p>Our up-to-date technology and advanced training assures you get the very best product available</p>
          </div>
          <div class="md:w-1/3 content">
               <h2>Core Values</h2>
               <p>Safety, integrity and responsibility in everything we do Highly experienced and competent Service Team. Fast & friendly support, attention to every detail</p>

               <h2>Customer Service</h2>
               <p>At H.P.E. INDUSTRY LTD. we are always ready and able to answer or assist you with any questions or problems you may have.No customer is too small. No question goes unanswered.</p>

               <p>We pride ourselves on responding to the needs of our customers – before and long after the point of sale.We are able to make any modifications to existing products to fit your specific applications.</p>

               <p>We expect nothing less than complete customer satisfaction.</p>
               <hr class="my-6">
               <img src="/assets/images/services-pc.jpg" alt="">
               <h2>Get In Touch</h2>
               <a href="/contact" class="inline-flex py-3 pl-3 pr-5 mt-4 text-white rounded-md hover:bg-primary-darker bg-primary">
                    <svg class="h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path d="M12.5 0C19.404 0 25 5.596 25 12.5S19.404 25 12.5 25 0 19.404 0 12.5 5.596 0 12.5 0zM9.134 5.469H6.25a.782.782 0 00-.781.781c0 7.323 5.958 13.281 13.281 13.281.431 0 .781-.35.781-.781v-2.884a.782.782 0 00-.781-.782 8.626 8.626 0 01-3.82-.873.794.794 0 00-.599-.036.788.788 0 00-.448.398l-.563 1.165a11.002 11.002 0 01-4.058-4.058l1.166-.563a.783.783 0 00.363-1.047 8.596 8.596 0 01-.875-3.82.782.782 0 00-.782-.781z" fill="#B5E5FB"/></svg>
                    Tell Us About your needs
               </a>

          </div>
     </div>
</section>

@endsection
