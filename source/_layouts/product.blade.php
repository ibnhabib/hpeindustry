@extends('_layouts.master')

@section('body')
@include('assets._partials.upper_band')
@include('assets._partials.navigation')

{{-- Bread Crumbs --}}

<div class="section mt-8">
    <nav aria-label="breadcrumbs">
        <ul class="flex">
            <li><a href="/" class="text-primary">Products </a></li>
            <li class="ml-4 text-gray-500">/</li>
            <li class="ml-4">{{$page->official_product_name}}</li>
        </ul>
    </nav>
</div>

{{-- Product Details --}}
<section class="section mt-8 text-gray-600">
    <div class="flex">

        {{-- Logo --}}
        <div class="w-32 md:w-64 flex-shrink-0">
            <img class="object-fill w-full" src="/assets/images/product_logos/{{$page->official_product_logo}}" alt="">
        </div>
        <div class="w-4 md:w-8 flex-shrink-0"></div>

        {{-- Description --}}
        <div class="md:text-lg max-w-prose">
            <p>{{$page->official_product_description}}</p>

            {{-- Action Buttons --}}
            <div class="flex">

                @if(strlen($page->official_product_catalogue) > 0)
                {{-- Catalogue Button --}}
                <a href="/assets/catalogues/{{$page->official_product_catalogue}}"
                    class="group inline-flex mt-4 mr-4 py-2 items-center rounded-lg px-2 border border-gray-50 hover:text-white hover:bg-primary shadow"
                    download>
                    <svg class="h-5 mr-1 text-primary group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>Download {{$page->official_product_name}}'s catalogue</span>
                </a>

                @endif
                {{-- Visit Website Button --}}
                <a href="{{$page->official_product_website}}" target="_blank"
                    class="group inline-flex mt-4 mr-4 py-2 items-center rounded-lg px-2 border border-gray-50 hover:text-white hover:bg-primary shadow"
                    download>
                    <svg class="h-5 mr-1 text-primary group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Visit {{$page->official_product_name}}'s website</span>
                </a>

            </div>


        </div>
    </div>
</section>

{{-- Products Grid --}}
<section class="section mt-16 ">
    <h2 class="text-2xl font-bold text-primary uppercase mb-8">{{$page->official_product_name}} products at HPE Industries :</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 border-t border-dashed border-primary pt-6">
    @foreach($page->manifest as $product)
    <div class="p-4 border-b border-dashed border-primary">
        <div class="h-48">
            <img class="object-contain h-40" src="/assets/images/products/{{$page->product_key}}/{{$product['image']}}" alt="{{$product['title']}}">
        </div>
        <small class="px-4 block text-sm text-gray-400 uppercase">{{$product['title']}}</small>
    </div>
    @endforeach
</div>
</section>

@endsection