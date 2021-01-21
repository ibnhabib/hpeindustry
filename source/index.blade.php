---
extends: _layouts.master
title: Welcome To HPE Industry
---

{{-- Responsive Helper Bar. Remove when done --}}
<div class="container mx-auto bg-gray-300 p-2 text-xs">
     <span class="sm:hidden">extra small</span>
     <span class="hidden sm:inline-block md:hidden">small</span>
     <span class="hidden md:inline-block lg:hidden">medium</span>
     <span class="hidden lg:inline-block xl:hidden">large</span>
     <span class="hidden xl:inline-block">extra large</span>
</div>


@section('body')
@include('assets._partials.upper_band')
@include('assets._partials.navigation')

{{-- Slideshow --}}
@include('assets._partials.slideshow')

{{-- Products & services --}}
<section class="section md:flex flex-grow items-start pb-24">

    {{-- Products --}}
    <div class="pr-12 w-full">

        {{-- products intro --}}
        <h2 class="font-bold text-2xl text-gray-800 mb-3 pb-3 ">Products</h2>
        <div class="border-t border-b border-dashed border-primary">
            <p class="py-4 text-gray-600 text-xl max-w-prose">H.P.E. Industry LTD. stocks a wide range of products from valves and cylinders to sensors, pumps and motors in Ghana, all from top international brands listed below.</p>
        </div>
        {{-- products grid --}}

        <div class="mt-12 grid grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($products as $product)
            <a href="/products/{{$product->product_key}}"><img class="w-full" src="/assets/images/product_buttons/{{$product->product_button}}" alt="{{$key}}"></a>
            @endforeach
        </div>

        {{-- Customers --}}
        <h2 class="mt-8 font-bold text-2xl text-gray-800 mb-3 pb-3 ">Our Customers</h2>
        <div class="border-t border-b border-dashed border-primary">
            <p class="py-4 text-gray-600 text-xl max-w-prose">We Are Trusted by Ghana's Top Companies</p>
        </div>

        <div class="grid grid-cols-10 gap-1 mt-4">
            @include('assets._partials.customers')
        </div>

    </div>
    {{-- festo logo and services --}}
    <div class="md:w-1/4 lg:w-1/3 xl:w-1/4 flex-shrink-0">
        {{-- logo --}}
        <img class="w-full max-w-xs mt-12 md:mt-0" src="/assets/images/Festo_Partner_Label_Print_L_900-01.jpg" alt="Festo Official Partner">
        {{-- Services --}}
        <h2 class="font-bold text-2xl text-gray-800 py-3 ">Services</h2>
            <x-service title="Sales and Services" image="sales-and-services.png">
                We provides the best industrial automation solutions and technical support through our highly experienced sales team.
            </x-service>
            <x-service title="Solution Sales" image="solution-sales.png">
                With a wide variety of products, we help customers raise productivity by providing alround customized solutions
            </x-service>
            <x-service title="Compressed Air Installation" image="compressed-air-installation.png">
                Infinity piping is a high performance aluminum piping system that is easy to install and simple to extend or modify.
            </x-service>
            <x-service title="Maintenance And Field Work" image="maintenance-and-field-work.png">
                We provide field support and services for large scale projects within a wide range of industries. With a vast range of products including aluminum piping.
            </x-service>
            <x-service title="Industrial Automation" image="industrial-automation.png">
                With a wide variety of products, we help customers raise productivity by providing alround solutions which are customized to meet requirements, budget and environments.
            </x-service>
    </div>
</section>

@endsection
