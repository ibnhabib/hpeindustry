<?php
    // First guard against non-listed products;
    if (!in_array($product_key, ['festo','aignep','autonics','finder', 'comex', 'infinity', 'jorc','mei', 'mm-rotork','omi','shiny'])) {
        die('Sorry, the product key' . $product_key  . ' is not listed yet');
    }
    
    // Include product manifest (has product name, list of parts, and product description)
    @include_once($project_root_folder . "/manifests/$product_key-manifest.php");

    // Set Variables for page
    $product_name = isset($official_product_name) ? $official_product_name : ucfirst($product_key);
    $page_title = 'HPE Industry Products - ' . $product_name ;
    $css = '/css/app.css';
    $script = 'js/app.js';
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Head & Metadata -->
    <?php include_once($project_root_folder.'/views/partials/head.view.php');?>

    <!-- Upper Band -->
    <?php include_once($project_root_folder.'/views/partials/upper_band.view.php') ;?>

    <!-- Navigation Bar -->
    <?php include_once($project_root_folder.'/views/partials/navigation.view.php') ;?>

    <!-- breadcrumbs -->
    <section class="section">
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="/">Products</a></li>
                <li class="is-active"><a href="#" aria-current="page"><?= $product_name  ?> </a></li>
            </ul>
            </nav>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-4">
                    <img src="/img/product_logos/<?=$official_product_logo?>" alt="">
                </div>
                <div class="column is-7 is-offset-1">
                    <p><?=$official_product_description?></p>
                    <p>HPE Industries stocks a wide variety of <?=$official_product_name?> products, as per the list below</p>
                    <p>
                        <?php 
                            if (isset($official_product_catalogue)) {
                        ?>
                                <a href="/catalogues/<?=$official_product_catalogue?>" class="button is-small">Download Catalogue</a>
                        <?php
                            }
                        ?>
                        <a href="<?=$official_product_website?>" class="button is-small">Visit <?=$official_product_name?>'s website</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="products-grid">
    <?php
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
    
    
    <?php 
    endforeach;
    ?>
</div> <!-- last .columns -->
</div> <!-- products-grid -->
</div> <!-- .container -->
</section>


</body>

<?php include_once($project_root_folder . '/views/partials/footer.view.php') ; ?>

</html>
