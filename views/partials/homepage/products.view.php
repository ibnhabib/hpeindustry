<?php 
$products=[
    'festo' => 'festo.jpg',
    'aignep' => 'aignep.png', 
    'autonics' => 'autonics.jpg',
    'comex' => 'comex.jpg',
    'finder'    => 'finder.png',
    'infinity'  =>  'infinity.jpg',
    'jorc'      =>  'jorc.jpg',
    'mei'       =>  'mel.jpg',
    'mm-rotork'        =>  'mm.jpg',
    'omi'       =>  'omi.jpg',
    'shiny'     =>  'shiny.jpg'
];
?>
<h2 class="title is-size-3">Products</h2>
<p class="subtitle pull-quote is-size-5">H.P.E. Industry LTD. stocks a wide range of products from valves and cylinders to sensors, pumps and motors in Ghana, all from top international brands listed below.</p>
<div class="hpe_grid" style="flex-wrap: wrap; display: flex; justify-content: space-between;">
<?php
    foreach ($products as $key => $product) { ?>
        <a style="width:31%" href="/products/<?=$key?>">
            <img style="margin-bottom:1em" width="100%" height="auto" src="/img/product_buttons/<?=$product?>" alt="">
        </a>
    <?php }
?>
<div style="width:30%">&nbsp;</div> <!-- to prevent the last button to be on the right -->
</div>
<!-- <div class="columns">
    <div class="column"><a href="/products/festo"><img src="img/product_buttons/festo.jpg" alt=""></a></div>
    <div class="column"><a href=""><img src="img/product_buttons/aignep.png" alt=""></a></div>
    <div class="column"><a href=""><img src="img/product_buttons/autonics.jpg" alt=""></a></div>
    <div class="column"><a href=""><img src="img/product_buttons/comex.jpg" alt=""></a></div>
</div> -->
<!-- <div class="columns">
    <div class="column"><a href=""><img src="img/product_buttons/finder.png" alt=""></a></div>
    <div class="column"><a href=""><img src="img/product_buttons/infinity.jpg" alt=""></a></div>
    <div class="column"><a href=""><img src="img/product_buttons/jorc.jpg" alt=""></a></div>
    <div class="column"><a href=""><img src="img/product_buttons/mel.jpg" alt=""></a></div>
</div>  -->
<!-- <div class="columns">
    <div class="column"><a href=""><img src="img/product_buttons/mm.jpg" alt=""></a></div>
    <div class="column"><a href=""><img src="img/product_buttons/omi.jpg" alt=""></a></div>
    <div class="column"><a href=""><img src="img/product_buttons/shiny.jpg" alt=""></a></div>
    <div class="column">&nbsp;</div>
</div>  -->

<hr>

<h2 class="title is-size-3">Our Customers</h2>
<p class="pull-quote is-size-5">We Are Trusted by Ghana's Top Companies</p>