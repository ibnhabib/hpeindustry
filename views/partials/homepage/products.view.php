<?php 
$products=[
    'festo'     => 'festo.jpg',
    'aignep'    => 'aignep.png', 
    'autonics'  => 'autonics.jpg',
    'comex'     => 'comex.jpg',
    'finder'    => 'finder.png',
    'infinity'  =>  'infinity.jpg',
    'jorc'      =>  'jorc.jpg',
    'mei'       =>  'mel.jpg',
    'mm-rotork' =>  'mm.jpg',
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
