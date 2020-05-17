<section class="section">
        <div class="container">
            <div class="products-grid">
    <?php
    echo '<h2 class="title is-size-3">Available Items</h2>';
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