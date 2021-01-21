<div class="my-16 section md:flex justify-between items-start">
    
    <div class="flex justify-between">

        {{-- Logo --}}
        <a href="/">
            <div >
                @include('assets._partials.animated_logo')
            </div>
        </a>
        
    
        {{-- Hamburger Menu --}}
        <svg id="hamburger" class="h-10 text-primary md:hidden cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>

    </div>

    {{-- Menu --}}
    <ul role="navigation" id="navigation" class="mt-4 md:mt-0 hidden md:flex text-md lg:text-xl items-start z-50">
        
        <li><a href="/about" class="block hover:bg-gray-100 pt-2 pb-1 md:p-4">About</a></li>
        
        <li class="group relative">
            
            <div class=" cursor-pointer flex items-center hover:bg-gray-100 pt-2 pb-1 md:p-4 md:ml-2">
                <div>Products </div> 
                <svg class="text-primary h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /> </svg>
            </div>
            
            <ul class="md:absolute md:top-14 md:left-0 md:shadow-md md:border border-gray-100 md:ml-2 md:invisible md:h-1 md:group-hover:visible md:group-hover:h-auto">
                @foreach ($products as $key => $product)
                    <li><a class="block bg-gray-50 md:bg-white hover:bg-gray-50 px-6 py-1 md:py-2" href="/products/{{$product->product_key}}">{{$product->official_product_name}}</a></li>
                @endforeach
            </ul>
        
        </li>
        <li><a href="/services" class="block hover:bg-gray-100 px-2 pt-2 pb-1 md:p-4 md:ml-2">Services</a></li>
        <li><a href="contact" class="inline-block bg-primary hover:bg-primary-darker rounded-lg text-white px-4 py-3 md:ml-2">Contact&nbsp;Us</a></li>
    </ul>    
</div>