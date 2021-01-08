---
extends: _layouts.master
title: Welcome To HPE Industry
---

@section('body')
@include('assets._partials.upper_band')
@include('assets._partials.navigation')

{{-- Slideshow --}}

{{-- Products & services --}}
<section class="section flex items-start">

    {{-- Products --}}
    <div class="flex-shrink pr-12">

        {{-- products intro --}}
        <h2 class="font-bold text-2xl text-gray-800 mb-3 pb-3 ">Products</h2>
        <div class="border-t border-b border-dashed border-primary">
            <p class="py-4 text-gray-600 text-xl max-w-prose">H.P.E. Industry LTD. stocks a wide range of products from valves and cylinders to sensors, pumps and motors in Ghana, all from top international brands listed below.</p>
        </div>
        {{-- products grid --}}

        <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
            @foreach($products as $product)
            <a href="/products/{{$product->product_key}}"><img src="/assets/images/product_buttons/{{$product->product_button}}" alt="{{$key}}"></a>
            @endforeach
        </div>
    </div>
    {{-- festo logo and services --}}
    <div class="w-80 min-w-80">
        {{-- logo --}}
        <img src="/assets/images/Festo_Partner_Label_Print_L_900-01.jpg" alt="Festo Official Partner">
        {{-- Services --}}
        <h2 class="font-bold text-2xl text-gray-800 py-3 ">Services</h2>
        <x-service title="Sales and Services" image="sales-and-services.png">
            We provides the best industrial automation solutions and technical support through our highly experienced sales team.
        </x-service>
        <x-service title="Solution Sales" image="solution-sales.png">
            With a wide variety of products, we help customers raise productivity by providing alround customized solutions
        </x-service>
    </div>
</section>

@endsection
