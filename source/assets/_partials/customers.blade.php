@php
$list_of_customer_logos = [
'Coca_Cola-1.jpg',
'FanMilk.jpg',
'Twi-logo-pxx-1.jpg',
'ashfoam_logo_alt-1.jpg',
'avnash.jpg',
'blow-1.jpg',
'cal-logo.jpg',
'cargill-300x150.jpg',
'cfao.jpg',
'cimf.jpg',
'ever-logo-1.jpg',
'fon-logo-1.jpg',
'fon_p_logo.jpg',
'ghacem.jpg',
'interplast_weblogo.jpg',
'latex-1.jpg',
'logo-1.jpg',
'logo-cadbury.jpg',
'logo-indofood.jpg',
'logo-kalyppo.jpg',
'logo-main-11-2.jpg',
'logoDhi-1.jpg',
'logo_barry-callebaut.jpg',
'nestle.jpg',
'nexans.jpg',
'nutrifoods.jpg',
'olam.jpg',
'permafix.jpg',
'powerandco-logo-1.jpg',
'printex.jpg',
'promasidor-logo.jpg',
'rana.jpg',
'resitech-1.jpg',
'sintex.jpg',
'thumb.aspx_.jpeg',
'toyota-1.jpg',
'unilever-2.jpg',
'wilmar-1.jpg',
]
@endphp
@foreach ($list_of_customer_logos as $logo)
    <img class="h-16" src="/assets/images/customers/{{$logo}}">
@endforeach