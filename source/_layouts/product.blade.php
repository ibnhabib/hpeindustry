@extends('_layouts.master')

@section('body')
@include('assets._partials.upper_band')
@include('assets._partials.navigation')

{{-- Product Details --}}
<section class="mt-8 text-gray-600 section">
    <div class="">

        {{-- Logo --}}
        <div class="flex items-center justify-center flex-shrink-0 w-32 mx-auto md:w-64">
            <img class="object-fit max-h-48" src="/assets/images/product_logos/{{$page->official_product_logo}}" alt="">
        </div>

        {{-- Description --}}
        <div class="mx-auto mt-8 text-center md:text-lg max-w-prose">
            <p>{{$page->official_product_description}}</p>

            {{-- Action Buttons --}}
            <div class="container flex justify-around mx-auto mt-8">

                @if(strlen($page->official_product_catalogue) > 0)
                {{-- Catalogue Button --}}
                <a href="/assets/catalogues/{{$page->official_product_catalogue}}"
                    class="inline-flex items-center p-2 mt-4 mr-4 border rounded-lg shadow group border-gray-50 hover:text-white hover:bg-primary"
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
                    class="inline-flex items-center p-2 mt-4 mr-4 border rounded-lg shadow group border-gray-50 hover:text-white hover:bg-primary"
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


{{-- photo sets (optional) --}}
@if(is_array($page->photo_sets))
<section class="mt-16 section">
    @foreach ($page->photo_sets as $set)
        <h2 class="mb-8 text-2xl font-bold text-center uppercase text-primary">{{$set['title']}}</h2>
        <div class="grid grid-cols-2 gap-4 pt-6 border-t border-dashed sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 border-primary">
        @foreach ($set['photos'] as $photo)
            <div>
                <img src="/assets/images/photo_sets/{{$page->product_key}}/{{$photo}}">
            </div>
            @endforeach
        </div>
    @endforeach
</section>
@endif

{{-- Products Grid --}}
<section class="mt-16 section ">
    <h2 class="mb-8 text-2xl font-bold text-center uppercase text-primary">{{$page->official_product_name}} products at HPE Industries</h2>
    <div class="grid grid-cols-2 pt-6 border-t border-dashed sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 border-primary">
    @foreach($page->manifest as $product)
    <div class="p-4 border-b border-dashed border-primary">
        <div class="h-48">
            <img class="object-contain h-40" src="/assets/images/products/{{$page->product_key}}/{{$product['image']}}" alt="{{$product['title']}}">
        </div>
        <small class="block px-4 text-sm text-gray-400 uppercase">{{$product['title']}}</small>
    </div>
    @endforeach
</div>
</section>

@endsection