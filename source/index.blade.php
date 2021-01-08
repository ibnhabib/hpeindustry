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
    <div class="w-3/4 pr-12">

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
    <div class="w-1/4">
        {{-- logo --}}
        <img src="/assets/images/Festo_Partner_Label_Print_L_900-01.jpg" alt="Festo Official Partner">
        {{-- Services --}}
        services
    </div>
</section>

@endsection
