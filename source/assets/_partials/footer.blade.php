<div class="w-full bg-primary py-8">
    <div class="section md:flex justify-between text-white">
        
        {{-- Left Side --}}
        <div class="w-1/3">
            <img class=" w-72" src="/assets/images/hpe-logo-inverse.png">
        </div>
        
        {{-- Center --}}
        <div class="w-1/3">
            <h3 class="uppercase text-lg font-semibold opacity-80">Products</h3>
            <ul>
                <div class="grid grid-cols-4 gap-2">
                    @foreach ($products as $key => $product)
                        <li><a class="" href="/products/{{$product->product_key}}">{{$product->official_product_name}}</a></li>
                    @endforeach
                </div>
            </ul>
        </div>
        
        {{-- Right Side --}}
        <div class="w-1/3">
           Right
        </div> 

    </div>
</div>