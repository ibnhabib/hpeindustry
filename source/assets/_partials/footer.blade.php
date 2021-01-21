<div class="w-full bg-primary py-8">
    <div class="section md:flex justify-between text-white">
        
        {{-- Left Side --}}
        <div class="md:w-1/3 mr-16">
            <div class="text-light-blue ">HPE Industry 2021 &copy;</div>
            <a href="/"><img class=" w-72 mt-8" src="/assets/images/hpe-logo-inverse.png"></a>
        </div>
        
        {{-- Center --}}
        <div class="md:w-1/3 mr-16 mt-8 md:mt-0">
            <h3 class="uppercase text-lg font-semibold opacity-80 pb-2 mb-2 border-b border-light-blue">Products</h3>
            <ul>
                <div class="grid grid-cols-2">
                    @foreach ($products as $key => $product)
                        <li class="text-light-blue hover:text-white"><a class="" href="/products/{{$product->product_key}}">{{$product->official_product_name}}</a></li>
                    @endforeach
                </div>
            </ul>
        </div>
        
        {{-- Right Side --}}
        <div class="md:w-1/3 mr-16 mt-8 md:mt-0 ">
            <div class="flex items-center">
                {{-- Phone Icon --}}
                <svg class="h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path d="M12.5 0C19.404 0 25 5.596 25 12.5S19.404 25 12.5 25 0 19.404 0 12.5 5.596 0 12.5 0zM9.134 5.469H6.25a.782.782 0 00-.781.781c0 7.323 5.958 13.281 13.281 13.281.431 0 .781-.35.781-.781v-2.884a.782.782 0 00-.781-.782 8.626 8.626 0 01-3.82-.873.794.794 0 00-.599-.036.788.788 0 00-.448.398l-.563 1.165a11.002 11.002 0 01-4.058-4.058l1.166-.563a.783.783 0 00.363-1.047 8.596 8.596 0 01-.875-3.82.782.782 0 00-.782-.781z" fill="#B5E5FB"/></svg>
                {{-- Phone Number --}}
                <address>
                    <a class="text-white mr-5" href="tel:+233302235108">{{$page->contact}}</a>
                </address>
            </div>
            <div class="flex mt-2 ">
                {{-- Email Icon --}}
                <svg class="h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><path d="M12.5 0C5.596 0 0 5.596 0 12.5 0 19.403 5.596 25 12.5 25 19.403 25 25 19.403 25 12.5 25 5.596 19.403 0 12.5 0zm0 4.39l7.397 4.613H5.103L12.5 4.391zm7.489 11.979c0 .74-.6 1.339-1.34 1.339H6.35c-.74 0-1.34-.6-1.34-1.34v-7.07c0-.079.009-.155.022-.23l7.067 4.407a.766.766 0 00.055.029c.05.026.101.047.154.06l.016.004a.762.762 0 00.175.022.749.749 0 00.175-.022l.017-.004a.75.75 0 00.182-.075c.009-.005.018-.008.027-.014l7.067-4.407c.013.075.021.151.021.23v7.072z" fill="#B5E5FB"/></svg>
                {{-- Email Address --}}
                <a class="text-white" href="mailto:sales@hpeindustry.com">{{$page->email}}</a>
            </div>
            <div class="flex mt-2  ">
                {{-- Facebook Icon --}}
                <svg class="h-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25"><g fill="none"><path d="M14.23 24.351zm.246-.031c-.049.02-.098.036-.146.054l.146-.053zm-.826.117zm.235-.021zm.925-.162zm.828-.207l-.105.06.105-.06zm-.251.068l-.113.062.113-.062zm-.327.083c-.04.02-.08.038-.121.057l.12-.057zm-1.775.286z" fill="#000"/><path d="M24.51 12.255C24.51 5.488 19.022 0 12.255 0S0 5.488 0 12.255 5.488 24.51 12.255 24.51c.072 0 .144-.002.215-.003v-9.54H9.837V11.9h2.633V9.64c0-2.619 1.599-4.044 3.935-4.044 1.118 0 2.08.083 2.36.12v2.737h-1.61c-1.271 0-1.517.604-1.517 1.49V11.9h3.038l-.396 3.068h-2.642v9.07c5.122-1.47 8.872-6.188 8.872-11.782z" fill="#B5E5FB"/><path d="M13.065 24.498zm-.391.027z" fill="#000"/></g></svg>
                {{-- Facebook Link --}}
                <a class="text-white" href="{{$page->fb_page}}">Facebook Page</a>
            </div>
        </div> 

    </div>
</div>