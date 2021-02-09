<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="font-sans antialiased text-gray-900">
        
    {{-- Responsive Helper Bar. Remove when done --}}
    <div class="container p-2 mx-auto text-xs bg-gray-300">
        <span class="sm:hidden">extra small</span>
        <span class="hidden sm:inline-block md:hidden">small</span>
        <span class="hidden md:inline-block lg:hidden">medium</span>
        <span class="hidden lg:inline-block xl:hidden">large</span>
        <span class="hidden xl:inline-block">extra large</span>
    </div>
    <div class="min-h-screen">
        @yield('body')
    </div>
    @include('assets._partials.footer')
    </body>
    <script src="{{mix('js/main.js', 'assets/build')}}"></script>
    @include('assets._partials.scripts')
</html>
