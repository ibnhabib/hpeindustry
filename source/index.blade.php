---
extends: _layouts.master
title: Welcome To Mars Express
---



@section('body')
@include('assets._partials.upper_band')
@include('assets._partials.navigation')

{{-- Slideshow --}}
@include('assets._partials.slideshow')

{{-- Products & services --}}
<section class="items-start flex-grow pb-24 section md:flex">

    {{-- Products --}}
    <div class="w-full pr-12">

        {{-- products intro --}}
        <h2 class="pb-3 mb-3 text-2xl font-bold text-gray-800 ">Products</h2>
        <div class="border-t border-b border-dashed border-primary">
            <p class="py-4 text-xl text-gray-600 max-w-prose">Mars Express stocks a wide range of products from Packing Material, Cargo packing, Logistics services, relocation and moving services in Abu Dhabi, all from top international brands listed below.</p>
        </div>
        {{-- products grid --}}

        <div class="grid grid-cols-2 gap-4 mt-12 lg:grid-cols-3">
            @foreach($products as $product)
            <a href="/products/{{$product->product_key}}"><img class="w-full" src="/assets/images/product_buttons/{{$product->product_button}}" alt="{{$key}}"></a>
            @endforeach
        </div>

        {{-- Customers --}}
        <h2 class="pb-3 mt-8 mb-3 text-2xl font-bold text-gray-800 ">Our Customers</h2>
        <div class="border-t border-b border-dashed border-primary">
            <p class="py-4 text-xl text-gray-600 max-w-prose">We Are Trusted by Ghana's Top Companies</p>
        </div>

        <div class="grid grid-cols-10 gap-1 mt-4">
            @include('assets._partials.customers')
        </div>

    </div>
    {{-- festo logo and services --}}
    <div class="flex-shrink-0 md:w-1/4 lg:w-1/3 xl:w-1/4">
        {{-- logo --}}
        <img class="w-full max-w-xs mt-12 md:mt-0" src="/assets/images/Festo_Partner_Label_Print_L_900-01.jpg" alt="Festo Official Partner">
        {{-- Services --}}
        <h2 class="py-3 text-2xl font-bold text-gray-800 ">Services</h2>
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
        <a href="/services" class="block px-4 py-2 mt-8 text-center border rounded-md border-primary text-primary hover:bg-primary hover:text-white">
            More About our Services
        </a>
    </div>
</section>

@endsection
