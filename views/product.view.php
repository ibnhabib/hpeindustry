<?php
    // First guard against non-listed products;
    if (!in_array($product_key, ['festo','aignep','autonics','finder', 'comex'])) {
        die('Sorry, the product key' . $product_key  . ' is not listed yet');
    }
    
    // Set Variables for page
    $product_name = ucfirst($product_key);
    $page_title = 'HPE Industry Products - ' . $product_name ;
    $css = '/css/app.css';
    $script = 'js/app.js';
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Head & Metadata -->
    <?php include_once($project_root_folder.'/views/partials/head.view.php');?>

    <!-- Upper Bar -->
    <?php include_once($project_root_folder.'/views/partials/upper_band.view.php') ;?>

    <!-- Navigation Bar -->
    <?php include_once($project_root_folder.'/views/partials/navigation.view.php') ;?>

    <!-- Hero -->
    <section class="hero is-primary is-strong">
        <div class="hero-body">
            <div class="container">
            <h1 class="title">
               <?= $product_name ?>  
            </h1>
            <h2 class="subtitle">
            </h2>
            </div>
        </div>
    </section>
    <!-- breadcrumbs -->

    <section class="section">
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li class="is-active"><a href="#" aria-current="page"><?= $product_name  ?> </a></li>
            </ul>
            </nav>
        </div>
    </section>

    <section class="section">
        <div class="container">
    <?php
    // List of partnames and filenames
    @include_once($project_root_folder . "/manifests/$product_key-manifest.php");
    $columns = 6;
    $column_class = 'is-2'; // 4 columns, 12/6 = 2


    foreach ($manifest as $key => $item):
        if ($key % $columns == 0):
            if($key !== 0):?> 
                </div>
            <?php endif; ?>
            <div class="columns">
        <?php
        endif;?> 
        
        <div class="column <?= $column_class ?>">
            <?php 
            $image_location= "/img/products/$product_key/".$item['image'];
            $image_description = $item['title'];
            include($project_root_folder.'/views/partials/card.view.php'); 
            ?>    
        </div>
    
    
        <!-- <img src="/img/products/festo/<?= $filenames[$key] ;?>">
        <p><?= $title ;?></p> -->
    <?php 
    endforeach;
    ?>
</div> <!-- last .columns -->
</div> <!-- .container -->
</section>


</body>
<!-- <script src="js/app.js"></script> -->
</html>
